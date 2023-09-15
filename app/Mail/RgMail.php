<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class RgMail extends Mailable
{
    use Queueable, SerializesModels;
     private $name;
    /**
     * Create a new message instance.
     */
    public function __construct($n)
    {
        $this->name = $n;
        //dd($this->name);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Kaizen',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
{
    return new Content(
        view: 'Mail.RgMail',
        with: [
                'name' => $this->name
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
        return [
          Attachment::fromPath(
          "/data/data/com.termux/files/home/storage/downloads/php/galo.jpg")];
    }
}
