<?php


namespace App\Payment\PagSeguroV3;

use Illuminate\Support\Facades\Http;
use Spatie\ArrayToXml\ArrayToXml;

class CreditCard
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function makePayment()
    {


        $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions?email=falecom@hipoagencia.com.br&token=FF454709E8E344BAB9CA42315D08974B";

        $dataPag = [
            'payment' => [
                'mode' => 'default',
                'method' => 'creditCard',
                'currency' => 'BRL',
                'sender' => [
                    'hash' => $this->data['senderHash'],
                    'name' => 'Teste Usuário Sender',
                    'email' => 'teste@sandbox.pagseguro.com.br',
                    'phone' => [
                        'areaCode' => '98',
                        'number' => '984283432'
                    ],
                    'documents' => [
                        'type' => 'CPF',
                        'value' => '41281413801'
                    ]
                ],
                'items' => [
                    'item' => [
                        'id' => '1',
                        'description' => 'Notebook Prata',
                        'quantity' => '1',
                        'amount' => '70.00',
                    ],
                ],
                'extraAmount' => '0.00',
                'reference' => 'R123456',
                'shipping' => [
                    'addressRequired' => 'false'
                ],
                'creditCard' => [
                    'token' => $this->data['token'],
                    'installment' => [
                        'quantity' => '3',
                        'noInterestInstallmentQuantity' => '3',
                        'value' => '23.33',
                    ],
                    'holder' => [
                        'name' => 'Customer Credit Name',
                        'documents' => [
                            'document' => [
                                'type' => 'CPF',
                                'value' => '41281413801'
                            ]
                        ],
                        'birthDate' => '07/09/1991',
                        'phone' => [
                            'areaCode' => '98',
                            'number' => '984283432'
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
                ],
                'notificationURL' => 'https://sualoja.com.br/notificacao'
            ]
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded; charset=ISO-8859-1',
            'Accept' => 'application/xml; charset=ISO-8859-1'
        ])->post($url, $dataPag);

        return $response->body();
    }

}
