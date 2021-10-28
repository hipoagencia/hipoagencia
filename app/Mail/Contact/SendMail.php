<?php

namespace App\Mail\Contact;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->replyTo($this->data['reply_email'], $this->data['reply_name'])
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject($this->data['subject'])
            ->markdown('email.contact', [
                'reply_name' => $this->data['reply_name'],
                'reply_email' => $this->data['reply_email'],
                'subject' => 'Novo Contato: ' . $this->data['reply_name'],
                'message' => $this->data['message'],
                'phone' => $this->data['phone'],
            ]);
    }
}
