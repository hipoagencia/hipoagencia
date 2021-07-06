<?php


namespace App\Payment\PagSeguro;


use Gloudemans\Shoppingcart\Facades\Cart;

class CreditCard
{
    private $items;
    private $user;
    private $cardInfo;
    private $reference;

    public function __construct($items, $user, $cardInfo, $reference)
    {
        $this->items = $items;
        $this->user = $user;
        $this->cardInfo = $cardInfo;
        $this->reference = $reference;
    }

    public function doPayment()
    {
        $user = $this->user;
        $email = env('PAGSEGURO_ENV') == 'sandbox' ? 'test@sandbox.pagseguro.com.br' : $user->email;

        list($quantity, $installmentAmount) = explode('|', $this->cardInfo['installment']);


        $creditCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();

        $creditCard->setReceiverEmail(env('PAGSEGURO_EMAIL'));
        $creditCard->setReference($this->reference);
        $creditCard->setCurrency("BRL");

        foreach ($this->items as $item) {
            $creditCard->addItems()->withParameters(
                $this->reference,
                $item->name,
                $item->qty,
                $item->price
            );
        }

        $creditCard->setSender()->setName($user->name . ' ' . $user->last_name);
        $creditCard->setSender()->setEmail($email);

        $creditCard->setSender()->setPhone()->withParameters(
            substr($user->telephone,0, 2),
            substr($user->telephone,2, 8)
        );

        $creditCard->setSender()->setDocument()->withParameters(
            'CPF',
            $user->document
        );

        $creditCard->setSender()->setHash($this->cardInfo['hash']);
        $creditCard->setSender()->setIp('127.0.0.1');

        $creditCard->setShipping()->setAddress()->withParameters(
            $user->street,
            $user->number,
            $user->neighborhood,
            $user->zipcode,
            $user->city,
            $user->state,
            'BRA',
            $user->complement
        );

        $creditCard->setBilling()->setAddress()->withParameters(
            $user->street,
            $user->number,
            $user->neighborhood,
            $user->zipcode,
            $user->city,
            $user->state,
            'BRA',
            $user->complement
        );


        $creditCard->setToken($this->cardInfo['card_token']);

        $installmentAmount = number_format($installmentAmount, 2, '.', '');
        $creditCard->setInstallment()->withParameters($quantity, $installmentAmount);

        $creditCard->setHolder()->setBirthdate($user->date_of_birth);
        $creditCard->setHolder()->setName($this->cardInfo['card_name']);

        $creditCard->setHolder()->setPhone()->withParameters(
            substr($user->telephone,0, 2),
            substr($user->telephone,2, 8)
        );

        $creditCard->setHolder()->setDocument()->withParameters(
            'CPF',
            $user->document
        );

        $creditCard->setMode('DEFAULT');

        $result = $creditCard->register(
            \PagSeguro\Configuration\Configure::getAccountCredentials()
        );

        return $result;
    }
}
