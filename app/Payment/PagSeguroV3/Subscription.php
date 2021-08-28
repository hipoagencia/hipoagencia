<?php


namespace App\Payment\PagSeguroV3;


use Illuminate\Support\Facades\Http;

class Subscription
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function makeSubscription()
    {
//        $email = env('PAGSEGURO_EMAIL');
//        $token = env('PAGSEGURO_TOKEN_SANDBOX');
//
//        $url = "https://ws.sandbox.pagseguro.uol.com.br/pre-approvals?email={$email}&token={$token}";

        $url = Credentials::getCredencials('/pre-approvals');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
        ])
            ->post($url, [
                'plan' => $this->data['plan_reference'],
                'sender' => [
                    'name' => 'Teste Usuário Sender',
                    'email' => 'teste@sandbox.pagseguro.com.br',
                    'hash' => $this->data['senderHash'],
                    'phone' => [
                        'areaCode' => '98',
                        'number' => '984283432'
                    ],
                    'address' => [
                        'street' => 'Rua Teste',
                        'number' => '29',
                        'complement' => '',
                        'district' => 'São Bernado',
                        'city' => 'São Luis',
                        'state' => 'MA',
                        'country' => 'BRA',
                        'postalCode' => '65056000'
                    ],
                    'documents' => [
                        [
                            'type' => 'CPF',
                            'value' => '41281413801'
                        ]
                    ]
                ],
                'paymentMethod' => [
                    'type' => 'CREDITCARD',
                    'creditCard' => [
                        'token' => $this->data['token'],
                        'holder' => [
                            'name' => 'Customer Credit Name',
                            'birthDate' => '07/09/1991',
                            'documents' => [
                                [
                                    'type' => 'CPF',
                                    'value' => '41281413801'
                                ]
                            ],
                            'billingAddress' => [
                                'street' => 'Rua Teste',
                                'number' => '29',
                                'complement' => '',
                                'district' => 'São Bernado',
                                'city' => 'São Luis',
                                'state' => 'MA',
                                'country' => 'BRA',
                                'postalCode' => '65056000'
                            ],
                            'phone' => [
                                'areaCode' => '98',
                                'number' => '984283432'
                            ]
                        ]

                    ]
                ]
            ]);

        return $response->json();
    }

    public function planCreate()
    {
        $url = Credentials::getCredencials('/pre-approvals/request/');

        $response = Http::withHeaders([
            'Accept' => 'application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1',
            'Content-Type' => 'application/json'
        ])->post($url,
            [
                'reference' => 'PLANO01',

                'preApproval' => [
                    'name' => 'Plano Teste',
                    'charge' => 'AUTO',
                    'period' => 'MONTHLY',
                    'amountPerPayment' => '39.99',
                ]
            ]);

        return $response->json()['code'];
    }
}
