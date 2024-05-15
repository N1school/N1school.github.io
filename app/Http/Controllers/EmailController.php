<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'recipient' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'recipient' => $request->recipient,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to($data['recipient'])->send(new SendEmail($data));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
