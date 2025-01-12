<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ]);

        // Save the email to the database
        $subscription = NewsletterSubscription::create([
            'email' => $request->email,
        ]);

        // Send email to Sheila
        Mail::send('emails.admin-newsletter', ['email' => $subscription->email], function ($message) {
            $message->to('sheila2030ao@gmail.com')
                ->subject('New Newsletter Subscription');
        });

        // Send thank-you email to the subscriber
        Mail::send('emails.user-newsletter', ['email' => $subscription->email], function ($message) use ($subscription) {
            $message->to($subscription->email)
                ->subject('Thank You for Subscribing');
        });

        // Return a JSON response
        return response()->json(['success' => true, 'message' => 'Thank you for subscribing!']);
    }
}
