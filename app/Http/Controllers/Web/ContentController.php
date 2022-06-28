<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Contact\SendMail;
use App\Models\Categories;
use App\Models\Classificacao;
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

        SEOTools::setTitle('Hipo Agência - Publicidade, Marketing Digital e Tráfego Pago');
        SEOTools::setDescription('Uma agência de publicidade especializada em marketing digital e que não deixa nada a desejar no off-line na cidade de Santos e na Riviera de São Lourenço');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.home', [
            'posts' => $posts,
        ]);
    }

    public function website()
    {
        SEOTools::setTitle('Criação e Desenvolvimento de Sites - Hipo Agência');
        SEOTools::setDescription('Está precisando de um site único, que se desataque dos concorrentes e que traga mais vendas? Saiba mais');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.website');
    }

    public function trafic()
    {
        SEOTools::setTitle('Tráfego Pago e Gestão de Anúncios - Hipo Agência');
        SEOTools::setDescription('Venda mais com tráfego pago utilizando as melhores práticas do marketing digital. Saiba Mais');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.trafic');
    }

    public function social()
    {
        SEOTools::setTitle('Marketing digital e Gestão de Redes Sociais - Hipo Agência');
        SEOTools::setDescription('Manter as redes sociais atualizadas e o SAC em dia é uma necessidade de toda empresa. Saiba mais como podemos te ajudar');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.social');
    }

    public function identity()
    {
        SEOTools::setTitle('Identidade Visual e Criação de logotipo - Hipo Agência');
        SEOTools::setDescription('Criamos identidades únicas e marcantes para deixar o se negócio em evidência! Saiba mais');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.identity');
    }

    public function system()
    {
        SEOTools::setTitle('Criação e Manutenção de Sistemas Web - Hipo Agência');
        SEOTools::setDescription('Está na hora de automatizar os processos da sua empresa, garantindo maior eficiência e evitando erros humanos. Saiba Mais');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.system');
    }

    public function project()
    {
        SEOTools::setTitle('Projetos - Hipo Agência');
        SEOTools::setDescription('');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.project');
    }

    public function projects()
    {
        return view('web.projects');
    }

    public function clients()
    {
        SEOTools::setTitle('Quem já trabalhou com a empresa do hipopótamo - Hipo Agência');
        SEOTools::setDescription('');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        return view('web.clients');
    }

    public function blog()
    {
        SEOTools::setTitle('Novidades do mundo digital no blog da Hipo Agência');
        SEOTools::setDescription('');

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage('');

        $posts = Post::with('princ')->orderBy('id', 'DESC')->paginate(9);

        $categories = $this->categories();

        return view('web.blog', [
            'posts' => $posts,
            'categories' => $categories
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

        $categories = $this->categories();

        $posts = Post::with('princ')
            ->where('title', 'LIKE', "%$search%")
            ->orWhere('description', 'LIKE', "%$search%")
            ->limit(50)
            ->orderBy('id', 'DESC')->paginate(50);

        return view('web.blog', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }


    public function article(Request $request)
    {
        //Post
        $post = Post::with(['princ', 'user'])->where('slug', $request->slug)->first();

        //Ver mais posts (rodapé)
        $posts = Post::with('princ')->orderBy('id', 'DESC')->limit(3)->get();

        $categories = $this->categories();

        //Veja Mais (lateral)
//        $postsRelated = Post::with('princ')->where('principalcategory', $post->principalcategory)->orderBy('id', 'DESC')->limit(3)->get();

        $title = $post->title;

        SEOTools::setTitle($title);
        SEOTools::setDescription($post->meta_descri);

        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage($post->cover);

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage($post->cover);

        return view('web.article', [
            'post' => $post,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function category(Request $request)
    {
        $id = $request->id;

        $posts = Post::with('princ', 'categories')->
        whereHas('categories', function ($q) use ($id) {
            $q->where('category', $id);
        })->orderBy('id', 'DESC')->paginate(9);

        $category = Categories::where('id',$id)->first();

        SEOTools::setTitle($category->name . ' - Hipo Agência');
        SEOTools::setDescription('');

        OpenGraph::addProperty('locale', 'pt-br');;

        $categories = $this->categories();

        return view('web.blog', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function privacy()
    {
        $content = Content::where('id', '1')->first();

        return view('web.privacy', [
            'content' => $content
        ]);
    }


    public function terms()
    {
        $content = Content::where('id', '2')->first();

        return view('web.terms', [
            'content' => $content
        ]);
    }


    public function categories()
    {
        return Categories::get()->toArray();
    }


}
