<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Properti ini akan menampung data dari form (nama, email, pesan)

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data; // Mengambil data yang dikirim dari Controller
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Mengatur agar saat kita 'Reply' email, langsung ke email pengirim
            replyTo: $this->data['email'],
            subject: 'Pesan Baru dari Form Kontak Website', // Judul Email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Menentukan file view mana yang akan menjadi isi/body dari email
        return new Content(
            view: 'emails.contact-form',
        );
    }
}