<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    // public function send(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'message' => 'required|string',
    //     ]);

    //     Message::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'message' => $request->message,
    //     ]);

    //     return back()->with('success', 'Message sent successfully!');
    // }

    public function send(Request $request)
{
    dd($request->all());
}
}

