<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Contact\SendMail;
use App\Models\Content;
use App\Models\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function website()
    {
        return view('web.website');
    }

    public function trafic()
    {
        return view('web.trafic');
    }

    public function social()
    {
        return view('web.social');
    }

    public function identity()
    {
        return view('web.identity');
    }

    public function system()
    {
        return view('web.system');
    }

    public function project()
    {
        return view('web.project');
    }

    public function projects()
    {
        return view('web.projects');
    }

    public function clients()
    {
        return view('web.clients');
    }

    public function blog()
    {
        $posts = Post::with('princ')->orderBy('id', 'DESC')->paginate(9);

        return view('web.blog',[
            'posts' => $posts
        ]);
    }

    public function sendMail(Request $request)
    {
        $data = [
            'reply_name' => $request->name,
            'reply_email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => '',
        ];

        //dd($request->all());
        //return new SendMail($data);

        Mail::send(new SendMail($data));
        return redirect()->route('web.thanks');
    }

    public function sendNewsletter(Request $request)
    {
        $request->validate([
            //'g-recaptcha-response' => 'required|captcha',
            'g-recaptcha-response' => (env('NOCAPTCHA_SECRET') != '' ? 'required|captcha' : '')
        ]);

        $data = [
            'reply_name' => '',
            'reply_email' => $request->email,
            'message' => '',
            'phone' => '',
            'email' => '',
            'subject' => '',
        ];

        //return new SendMail($data);

        Mail::send(new SendMail($data));
        return redirect()->route('web.thanksNews');
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



    public function article(Request $request)
    {
        //Post
        $post = Post::with(['princ', 'user'])->where('slug', $request->slug)->first();

        //Ver mais posts (rodapé)
        $posts = Post::with('princ')->orderBy('id', 'DESC')->limit(3)->get();

        //Veja Mais (lateral)
        $postsRelated = Post::with('princ')->where('principalcategory', $post->principalcategory)->orderBy('id', 'DESC')->limit(3)->get();

        $title = $post->title;

        SEOTools::setTitle($title);
        SEOTools::setDescription($post->meta_descri);

        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage($post->cover);

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage($post->cover);


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
