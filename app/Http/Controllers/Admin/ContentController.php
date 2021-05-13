<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Content as ContentRequest;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return view('admin.content.index', [
           'contents' => $contents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContentRequest $request)
    {
        $contentCreate = Content::create($request->all());

        return redirect()->route('admin.content.edit', [
            'content' => $contentCreate->id
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
        $content = Content::where('id', $id)->first();
        return view('admin.content.edit', [
            'content' => $content
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContentRequest $request, $id)
    {
        $content = Content::where('id', $id)->first();
        $content->fill($request->all());

        if (!$content->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        return redirect()->route('admin.content.edit', [
            'content' => $content->id
        ])->with(['type' => 'success', 'message' => 'Conteúdo atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Content::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
