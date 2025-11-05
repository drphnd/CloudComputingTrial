<?php

namespace App\Mail;

use App\Models\Contact; // Pastikan ini ada
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact; // Properti untuk menyimpan data kontak

    /**
     * Create a new message instance.
     */
    public function __construct(Contact $contact)
    {
        // Data $contact dari controller disimpan di sini
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Konfirmasi Registrasi Akun', // <-- Ganti subjek email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // 'with' adalah data yang dikirim ke view
        return new Content(
            view: 'emailTemplate',
            with: [
                'full_name' => $this->contact->full_name,
                'student_email' => $this->contact->student_email,
                'birthdate' => $this->contact->birthdate,
            ],
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