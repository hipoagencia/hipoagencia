<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function home()
    {
        //Ver mais posts (rodapé)
        $posts = Post::with('princ')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.home',[
            'posts' => $posts,
        ]);
    }

    public function blog()
    {
        $posts = Post::with('princ')->orderBy('id', 'DESC')->paginate(9);

        return view('web.blog',[
            'posts' => $posts
        ]);
    }


    public function specialtyHeart()
    {
        //Veja Mais (lateral)
        $posts = Post::with('princ')->where('principalCategory', '2')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.specialtyHeart',[
            'posts' => $posts
        ]);
    }

    public function article(Request $request)
    {
        //Post
        $post = Post::with(['princ', 'user'])->where('slug', $request->slug)->first();

        //Ver mais posts (rodapé)
        $posts = Post::with('princ')->orderBy('id', 'DESC')->limit(3)->get();

        //Veja Mais (lateral)
        $postsRelated = Post::with('princ')->where('principalCategory', $post->principalCategory)->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.article',[
            'post' => $post,
            'posts' => $posts,
            'postsRelated' => $postsRelated
        ]);
    }

    public function category(Request $request)
    {
        $posts = Post::with('princ')->where('principalCategory', $request->id)->orderBy('id', 'DESC')->paginate(9);

        return view('web.blog',[
            'posts' => $posts
        ]);
    }


}
