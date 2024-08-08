<?php

namespace App\Http\Controllers;

use Throwable;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {

    }

    public function sendMail(Request $request)
    {
        $request->validate(
            [
                'firstname' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]
        );

        $details = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        // dd($details);
      
        try {
            Mail::to('afiffudin2222@gmail.com')->send(new ContactMail($details));
        } catch (Throwable $e) {
            return '<div>FAILED ' . $e . '</div>';
        }
        return back()->with('success', 'Your message has been sent successfully');

    }
}
