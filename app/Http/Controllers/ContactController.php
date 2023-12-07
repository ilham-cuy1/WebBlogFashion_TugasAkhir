<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|min:5',
            'message' => 'required|min:7'
        ]);
        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('ilhambois64@gmail.com')->send(new ContactMail($details));

        return back()->with(['terkirim' => 'Terima Kasih! Pesan Anda Telah Dikirim']);
    }
}
