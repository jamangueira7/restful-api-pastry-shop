<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class EmailConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $order;
    private array $products;
    private float $total;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $order, array $products, float $total)
    {
        $this->name = $name;
        $this->order = $order;
        $this->products = $products;
        $this->total = $total;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('jamjs7@hotmail.com', 'Pastry shop'),
            subject: 'Confirmation Order - ' .$this->order,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        date_default_timezone_set('America/Sao_Paulo');        return new Content(
            view: 'confirmation',
            with: [
                'name' => $this->name,
                'products' => $this->products,
                'total' => $this->total,
                'data' => date("d/m/Y"),
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
