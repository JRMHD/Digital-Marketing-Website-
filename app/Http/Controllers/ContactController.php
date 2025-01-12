<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Save form data to the database
        $contact = Contact::create($request->all());

        // Send email
        Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($contact) {
            $message->to('sheila2030ao@gmail.com')
                ->subject('New Contact Form Submission: ' . $contact->subject);
        });

        return response()->json(['success' => true, 'message' => 'Your message has been sent successfully!']);
    }
}
