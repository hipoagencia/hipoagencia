<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade;
use function PHPUnit\Framework\isNull;


class NewsletterController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (!NewsletterFacade::isSubscribed($request->user_email)) {
            NewsletterFacade::subscribe($request->user_email);
            NewsletterFacade::setMarketingPermission($request->user_email, 'email', true);
            return redirect()->back()->with(['type' => 'success', 'message' => 'Cadastro realizado com sucesso!']);
        }
        else{
            return redirect()->back()->with(['type' => 'error', 'message' => 'E-mail já cadastrado']);
        }
    }


}
