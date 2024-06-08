<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailsend extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    
    public function __construct($details)
    {
        $this->details = $details;
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

    public function build()
    {
        return $this->subject('verifikasi akun')
                    ->view('mailTemplate');
    }
}
