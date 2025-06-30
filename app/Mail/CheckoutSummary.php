<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutSummary extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $items;
    public $total;

    /**
     * Create a new message instance.
     */
    public function __construct($order, $items, $total)
    {
        $this->order = $order;
        $this->items = $items;
        $this->total = $total;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Order Confirmation #' . $this->order->id)
                    ->view('emails.checkout-summary');
    }
}
