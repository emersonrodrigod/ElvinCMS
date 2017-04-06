<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\{Email,ContactEmail,QuickForm};

class MailtoController extends Controller
{
    /**
     *
     * @param  AJAX Request
     */
    public function send(Request $request)
    {
      $this->validate($request, [
          'subject'=>'required',
          'text'=>'required',
          ]);

      Mail::to(config('settings.Email'))->send(new Email);
      
    }

    /**
     *
     * @param  AJAX Request
     */
    public function sendContactForm(Request $request)
    {
      Mail::to(config('settings.Email'))->send(new ContactEmail); 
    }

    /**
     *
     * @param  AJAX Request
     */
    public function sendQuickForm(Request $request)
    {
      $this->validate($request, [
          'quick-contactform-name'=>'required',
          'quick-contactform-email'=>'required|email',
          'quick-contactform-message'=>'required',
          ]);
      Mail::to(config('settings.Email'))->send(new QuickForm); 
    }
}
