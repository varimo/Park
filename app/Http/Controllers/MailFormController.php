<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailFormController extends Controller
{
    public function showContactForm()
    {
        return view('contact_form');
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("park.belka@yandex.ru")->send(new ContactForm($request->validated()));

        return redirect(route('contacts'));
    }
}
