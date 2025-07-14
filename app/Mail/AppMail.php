<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;

class AppMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $body;

    /**
     * Create a new message instance.
     */
    public function __construct(string $subject, array $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.app_mail',
            with: ['body' => $this->body]
        );
    }

    /**
     * Embed image as inline attachment (cid:crypto-bg).
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('assets/images/emailbg.jpg'))
                ->as('crypto-header.jpg')
                ->withMime('image/jpg')
                ->withDisposition('inline')
                ->contentId('crypto-bg'),
        ];
    }
}
