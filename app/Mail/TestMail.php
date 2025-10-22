<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    // untuk menyimpan data yang dikirimkan ke mail yang sementara 
    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        //membuat kerangka data yang akan dikirimkan ke mail

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->data['subject_message'],
            from: 'drphnd@drphnd.team2lesgo.site',
            to: $this->data['email_pengirim']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emailTemplate',
            with:[
                'nama_pengirim' => $this->data['nama_pengirim'],
            'email_pengirim' => $this->data['email_pengirim'] ?? '', // Tambahkan ?? '' jika bisa null
            'subject_message' => $this->data['subject_message'] ?? '',
            'content_message' => $this->data['content_message'] ?? '',
                ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
