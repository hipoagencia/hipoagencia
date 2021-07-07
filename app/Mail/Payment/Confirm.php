<?php

namespace App\Mail\Payment;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Confirm extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $data;

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
        return $this->replyTo(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->to($this->data['to'], $this->data['to_name'])
            ->from($this->data['reply_email'], $this->data['reply_name'])
            ->subject($this->data['subject'])
            ->markdown('email.payment.confirm', [
                'reply_name' => $this->data['reply_name'],
                'reply_email' => $this->data['reply_email'],
                'to' => $this->data['to'],
                'to_name' => $this->data['to_name'],
                'subject' => $this->data['subject'],
                'message' => $this->data['message']
            ]);
    }
}
