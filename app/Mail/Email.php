<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $subject = $request->input('subject');
        $text = $request->input('text');

        return $this->from(config('settings.Email'))
                    ->subject('Yeni mesajınız var!')
                    ->markdown('emails.email')
                    ->with([
                        'subject' => $subject,
                        'text' => $text
                    ]);
    }
}
