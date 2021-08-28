<?php


namespace App\Payment\PagSeguroV3;


class Credentials
{
    public static function getCredencials($uri)
    {
        $email = env('PAGSEGURO_EMAIL');
        $token = env('PAGSEGURO_TOKEN_SANDBOX');
        $env  = env('PAGSEGURO_ENV');

        $urlBase = $env == 'sandbox' ? 'https://ws.sandbox.pagseguro.uol.com.br'. $uri
                                    : 'https://ws.pagseguro.uol.com.br' . $uri;


       return  "{$urlBase}?email={$email}&token={$token}";

    }
}
