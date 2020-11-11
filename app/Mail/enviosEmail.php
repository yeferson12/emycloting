<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class enviosEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $distressCall;

    public function __construct(User $distressCall)
    {
        $this->distressCall = $distressCall
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.mail.primeraSesion');
    }
}
