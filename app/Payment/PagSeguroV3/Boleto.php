<?php


namespace App\Payment\PagSeguroV3;


use Illuminate\Support\Facades\Http;

class Boleto
{

    public function __construct()
    {
        $this->email = env('PAGSEGURO_EMAIL');
        $this->token = env('PAGSEGURO_TOKEN');
    }

    public function getBoleto()
    {

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post("https://ws.pagseguro.uol.com.br/recurring-payment/boletos?email={$this->email}&token={$this->token}",
            [
                'reference' => 'PLANO01',
                'firstDueDate' => now()->addDays(7)->format('Y-m-d'),
                'numberOfPayments' => '01',
                'periodicity' => 'monthly',
                'amount' => '19.87',
                'ExtraAmount' => 0,
                'instructions' => 'Teste Pagseguro.',
                'description' => 'Teste Pagseguro.',

                'customer' => [
                    'document' => [
                        'type' => 'CPF',
                        'value' => '41281413801'
                    ],
                    'name' => 'Daniel Martins',
                    'email' => 'compradoralini@xpto.com.br',

                    'phone' => [
                        'areaCode' => '13',
                        'number' => '982121107'
                    ],

                    'address' => [
                        'postalCode' => '01046010',
                        'street' => 'Av. Ipiranga',
                        'number' => '100',
                        'district' => 'Republica',
                        'city' => 'Sao Paulo',
                        'state' => 'SP',
                    ]
                ]
            ]);

        //return $response->json()['code'];

        return $response->json();
    }

}
