<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Content;
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

    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = Post::with('princ')
            ->where('title', 'LIKE', "%$search%")
            ->orWhere('description', 'LIKE', "%$search%")
            ->limit(50)
            ->orderBy('id', 'DESC')->paginate(50);

        return view('web.blog',[
            'posts' => $posts
        ]);
    }


    public function specialtyHeart()
    {
        //Veja Mais (lateral)
        $posts = Post::with('princ')->where('principalcategory', '2')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.specialtyHeart',[
            'posts' => $posts
        ]);
    }

    public function specialtyNervous()
    {
        //Veja Mais (lateral)
        $posts = Post::with('princ')->where('principalcategory', '1')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.specialtyNervous',[
            'posts' => $posts
        ]);
    }

    public function specialtyUrinary()
    {
        //Veja Mais (lateral)
        $posts = Post::with('princ')->where('principalcategory', '3')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.specialtyUrinary',[
            'posts' => $posts
        ]);
    }

    public function specialtyCancer()
    {
        //Veja Mais (lateral)
        $posts = Post::with('princ')->where('principalcategory', '4')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.specialtyCancer',[
            'posts' => $posts
        ]);
    }

    public function specialtySexual()
    {
        //Veja Mais (lateral)
        $posts = Post::with('princ')->where('principalcategory', '5')->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.specialtySexual',[
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
        $postsRelated = Post::with('princ')->where('principalcategory', $post->principalcategory)->orderBy('id', 'DESC')->limit(3)->get();

        return view('web.article',[
            'post' => $post,
            'posts' => $posts,
            'postsRelated' => $postsRelated
        ]);
    }

    public function category(Request $request)
    {
        $posts = Post::with('princ')->where('principalcategory', $request->id)->orderBy('id', 'DESC')->paginate(9);

        return view('web.blog',[
            'posts' => $posts
        ]);
    }

    public function privacy()
    {
        $content = Content::where('id', '1')->first();

        return view('web.privacy',[
            'content' => $content
        ]);
    }


    public function terms()
    {
        $content = Content::where('id', '2')->first();

        return view('web.terms',[
            'content' => $content
        ]);
    }


}
