<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $fullnames;
    public $username;
    public $pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullnames, $username, $pass)
    {
        //
        $this->fullnames=$fullnames;
        $this->username=$username;
        $this->pass=$pass;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'New Access Password',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.new_password',
            with:[
                'fullnames' => $this->fullnames,
                'username' => $this->username,
                'pass' => $this->pass,
                //'order_url' => URL::route('orders.show', $this->order->id)
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
