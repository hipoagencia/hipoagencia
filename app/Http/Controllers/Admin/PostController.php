<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Post as PostRequest;
use Illuminate\Support\Facades\Storage;
use DataTables;

class PostController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index','store']]);
        $this->middleware('permission:blog-create', ['only' => ['create','store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(20);

        return view('admin.posts.index', [
            'posts' => $posts
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::orderBy('name');
        $users = User::orderBy('name')->get();

        return view('admin.posts.create', [
            'categories' => $categories,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
//        $post = new Post();
//        $post->fill($request->all());
//        var_dump($post->getAttributes());
//        die;

        //dd($request->all());

        $postCreate = Post::create($request->all());

        if (!empty($request->file('cover'))) {
            $postCreate->cover = $request->file('cover')->store('public/post');
            $postCreate->save();
        }

        $postCreate->categories()->sync($request->all()['categories']);

        return redirect()->route('admin.posts.edit', [
            'post' => $postCreate->id
        ])->with(['type' => 'success', 'message' => 'Post cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $x = '<form action="' . route('admin.posts.destroy', ['post' => $row->id]) . '" method="POST">' .
                        csrf_field() . method_field("DELETE") .
                        '<a href="' . route('admin.posts.edit', ['post' => $row->id]) . '" class="edit btn btn-success btn-sm">Editar</a>

                        <button type="submit" class="delete btn btn-danger btn-sm"
                            onclick="return confirm(\'Você tem certeza de que deseja deletar esse registro?\')">Deletar</button>
                        </form>
                    ';
                    return $x;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/Y', strtotime($row->created_at));
                })
                ->editColumn('cover', function ($row) {
//                    return "<img src='{{$cover}}' width='100'/>";
                    return $row->slug;
                })
                ->rawColumns(['action', 'cover'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $categories = Categories::orderBy('name');
        $users = User::orderBy('name')->get();

        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => $categories,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, $id)
    {
//        $post = new Post();
//        $post->fill($request->all());
//        var_dump($post->getAttributes());
//        die;

        $post = Post::where('id', $id)->firstOrFail();
        $post->fill($request->all());

        if (!empty($request->file('cover'))) {
            $post->cover = $request->file('cover')->store('public/post');
        }

        if (!$post->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        $post->categories()->sync($request->all()['categories']);

        return redirect()->route('admin.posts.edit', [
            'post' => $post->id
        ])->with(['type' => 'success', 'message' => 'Post atualizado com sucesso!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
