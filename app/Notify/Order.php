<?php


namespace App\Notify;


use App\Jobs\Payment\Confirm;
use App\Jobs\Payment\newOrder;

class Order
{

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function newOrder()
    {
        //Notifica o cliente por email
        $this->data['subject'] ='Recebemos o seu novo pedido de número ' . $this->data['id_order'];
        $this->data['message'] ='Em caso de dúvidas você pode utilizar os canais...';
        newOrder::dispatch($this->data)->delay(now()->addSeconds(1));

        //Notifica o administrador por email
        $this->data['to'] = env('MAIL_FROM_ADDRESS');
        $this->data['to_name'] = env('APP_NAME');
        $this->data['subject'] ='Novo pedido! Código ' . $this->data['id_order'];
        $this->data['message'] ='Você é um adm';
        newOrder::dispatch($this->data)->delay(now()->addSeconds(1));
    }

    public function confirmPayment()
    {

        //Notifica o cliente por email
        $this->data['subject'] = 'Seu pagamento foi confirmado com sucesso!';
        $this->data['message'] = 'Aqui vai uma mensagem para o cliente que teve o pagamento confirmado';
        Confirm::dispatch($this->data)->delay(now()->addSeconds(1));

        //Notifica o administrador por email
        $this->data['to'] = env('MAIL_FROM_ADDRESS');
        $this->data['to_name'] = env('APP_NAME');
        $this->data['subject'] = 'Parabéns! Pagamento confirmado - Pedido ' . $this->data['id_order'];
        $this->data['message'] = 'Seu cliente já foi notificado da confirmação do pagamento';
        Confirm::dispatch($this->data)->delay(now()->addSeconds(1));
    }

}
