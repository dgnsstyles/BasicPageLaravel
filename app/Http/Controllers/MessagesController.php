<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
           'nombre' => 'required',
           'email' => 'required'
        ]);

        $message = new Message;
        $message->nombre = $request->input('nombre');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // save the message

        $message->save();

        //return
        return redirect('/')->with('success', 'El mensaje fue enviado');

    }
    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
