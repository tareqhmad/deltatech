<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::raw("Nom: {$data['name']}\nEmail: {$data['email']}\nMessage:\n{$data['message']}", function ($message) {
            $message->to('info@deltatechgroup.be')
                ->subject('Nouveau message depuis le site Delta Tech');
        });

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
