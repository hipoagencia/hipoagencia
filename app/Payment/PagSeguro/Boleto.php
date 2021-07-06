<?php


namespace App\Payment\PagSeguro;


class Boleto
{
    private $items;
    private $user;
    private $reference;
    private $senderHash;

    public function __construct($items, $user, $reference, $senderHash)
    {
        $this->items = $items;
        $this->user = $user;
        $this->reference = $reference;
        $this->senderHash = $senderHash;
    }

    public function doPayment()
    {
        $user = $this->user;
        $email = env('PAGSEGURO_ENV') == 'sandbox' ? 'test@sandbox.pagseguro.com.br' : $user->email;

        $boleto = new \PagSeguro\Domains\Requests\DirectPayment\Boleto();

        $boleto->setMode('DEFAULT');

        $boleto->setReceiverEmail(env('PAGSEGURO_EMAIL'));
        $boleto->setCurrency("BRL");

        foreach ($this->items as $item) {
            $boleto->addItems()->withParameters(
                $this->reference,
                $item->name,
                $item->qty,
                $item->price
            );
        }

        $boleto->setReference($this->reference);

        //$boleto->setExtraAmount(11.5);

        $boleto->setSender()->setName($user->name . ' ' . $user->last_name);
        $boleto->setSender()->setEmail($email);

        $boleto->setSender()->setPhone()->withParameters(
            substr($user->telephone,0, 2),
            substr($user->telephone,2, 8)
        );

        $boleto->setSender()->setDocument()->withParameters(
            'CPF',
            $user->document
        );

        $boleto->setSender()->setHash($this->senderHash);

        $boleto->setSender()->setIp('127.0.0.0');

        $boleto->setShipping()->setAddress()->withParameters(
            $user->street,
            $user->number,
            $user->neighborhood,
            $user->zipcode,
            $user->city,
            $user->state,
            'BRA',
            $user->complement
        );

        $result = $boleto->register(
            \PagSeguro\Configuration\Configure::getAccountCredentials()
        );

        return $result;
    }
}
