<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class verify_tu_baru extends Mailable
{
    use Queueable, SerializesModels;
    public $dataEmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataEmail)
    {
        $this->dataEmail = $dataEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('verifikasi_tu_baru');
    }
}
