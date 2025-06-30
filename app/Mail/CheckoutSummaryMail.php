<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutSummaryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cart;
    public $products;
    public $total;

    public function __construct($cart, $products, $total)
    {
        $this->cart = $cart;
        $this->products = $products;
        $this->total = $total;
    }

    public function build()
    {
        return $this->subject('Your Checkout Summary')
            ->view('emails.checkout-summary');
    }
}
