<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm() {
        return view('contact');
    }

    public function submitForm(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('admin@example.com')
                    ->subject('Contact Form Message from ' . $data['name']);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
