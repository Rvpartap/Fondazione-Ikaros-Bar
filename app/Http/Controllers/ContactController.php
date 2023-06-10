<?php

namespace App\Http\Controllers;

use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function show() {
		return view('contact');
 	}
 	
	public function mailContactForm(ContactFormRequest $message, Recipient $recipient) {      
  		$recipient->notify(new ContactFormMessage($message));
  		return redirect('/contact#requestsuccess')->with('message', 'Messaggio inviato con successo! Entro le 24 ore riceverai la risposta.');
	}
}
?>