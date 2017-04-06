<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContactEmail extends Mailable
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
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        return $this->from(config('settings.Email'))
                    ->subject('Yeni mesajınız var!')
                    ->markdown('emails.contactEmail')
                    ->with([
                        'name' => $name,
                        'email'=> $email,
                        'phone' => $phone,
                        'message' => $message
                    ]);
    }
}
