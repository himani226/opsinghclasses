<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        Mail::send('emails.contact', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to('vichaar.team@gmail.com', 'Team')
                ->subject($validatedData['subject']);
        });

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}

