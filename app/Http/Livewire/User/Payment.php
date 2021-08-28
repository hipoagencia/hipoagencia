<?php

namespace App\Http\Livewire\User;

use App\Payment\PagSeguroV3\Boleto;
use App\Payment\PagSeguroV3\Credentials;
use App\Payment\PagSeguroV3\CreditCard;
use App\Payment\PagSeguroV3\Subscription;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Payment extends Component
{

    public $sessionId;

    protected $listeners = [
        'paymentData' => 'proccessSubscription'
    ];

    public function mount()
    {

        $url = Credentials::getCredencials("/sessions/");

        $response = Http::post($url);
        $response = simplexml_load_string($response->body());

        $this->sessionId = (string)$response->id;

    }

    public function proccessSubscription($data)
    {
        //Criar um plano para teste
        //dd($planPagSeguro = (new CreditCard())->planCreate());

//        $data['plan_reference'] = '1048E039C7C75B3EE4326F9FC91B388E';
//        dd($makeSubscription = (new Subscription($data))->makeSubscription());

        dd($creditCardPay = (new CreditCard($data))->makePayment());
    }


    public function payBoleto()
    {
        dd($boletoCreate = (new Boleto())->getBoleto());
    }



    public function render()
    {
        return view('livewire.user.payment');
    }


}
