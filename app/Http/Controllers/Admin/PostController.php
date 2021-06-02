<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Post as PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('admin.posts.index',[
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
        $authors = User::orderBy('name')->get();

        return view('admin.posts.create', [
            'categories' => $categories,
            'authors' => $authors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
//        $post = new Post();
//        $post->fill($request->all());
//        var_dump($post->getAttributes());
//        die;

        $postCreate = Post::create($request->all());

        if (!empty($request->file('cover'))) {
            $postCreate->cover = $request->file('cover')->store('public/post');
            $postCreate->save();
        }

        return redirect()->route('admin.posts.edit', [
            'post' => $postCreate->id
        ])->with(['type' => 'success', 'message' => 'Post cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        $categories = Categories::orderBy('name');
        $authors = User::orderBy('name')->get();

        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => $categories,
            'authors' => $authors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, $id)
    {
//        $post = new Post();
//        $post->fill($request->all());
//        var_dump($post->getAttributes());
//        die;

        $post = Post::where('id', $id)->first();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
