<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'nullable|string|in:web-development,wordpress,shopify,ui-ux,digital-marketing',
            'message' => 'required|string|min:5|max:2000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'message' => $request->message,
            'ip_address' => $request->ip()
        ]);

        $emailData = $request->only(['name', 'email', 'phone', 'service', 'message']);
        Mail::to('thepakcoder@gmail.com')->send(new ContactFormSubmitted($emailData));

        // Here you can add email notification if needed
        // Mail::to(config('mail.from.address'))->send(new ContactFormSubmitted($contact));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! We will contact you soon.'
        ]);
    }
}