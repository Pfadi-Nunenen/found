<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClaimMail extends Mailable
{
    use Queueable, SerializesModels;

    public $claim;
    public $item;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($claim, $item)
    {
        $this->claim = $claim;
        $this->item = $item;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.claim', ['item' => $this->item, 'claim' => $this->claim])
            ->subject('Lost & Found - Pfadi Nünenen');
    }
}
