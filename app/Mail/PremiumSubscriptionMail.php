<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PremiumSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $purchaseDate;
    public $cost;

    /**
     * Create a new message instance.
     */
    public function __construct($username, $purchaseDate, $cost)
    {
        $this->username = $username;
        $this->purchaseDate = $purchaseDate;
        $this->cost = $cost;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmación de Suscripción Premium',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.premium-subscription',
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
