<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'consultation_date' => 'required|date',
            'consultation_time' => 'required',
        ]);

        // Save to the database
        $consultation = Consultation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->number,
            'consultation_date' => $request->consultation_date,
            'consultation_time' => $request->consultation_time,
            'message' => $request->message,
        ]);

        // Send email to Sheila
        Mail::send('emails.admin-consultation', ['consultation' => $consultation], function ($message) {
            $message->to('sheila2030ao@gmail.com')
                ->subject('New Consultation Booking');
        });

        // Send personalized email to the user
        Mail::send('emails.user-consultation', ['consultation' => $consultation], function ($message) use ($consultation) {
            $message->to($consultation->email)
                ->subject('Your Consultation Booking Received');
        });

        return response()->json(['success' => true, 'message' => 'Your booking has been received successfully!']);
    }
}
