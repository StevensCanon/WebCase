<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
   public function store(Request $request)
   {
      $message = $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|email|max:255',
         'subject' => 'required|string|max:255',
         'content' => 'required|string|min:3',
     ]);
     

    Mail::to('canonsuarezstevens@gmail.com')-> send(new MessageReceived ($message));

   return back()->with('status', 'Recibimos tu mensaje, gracias por contactarnos! ');
   }
}
