<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(/*Request $request*/) {
       // return $request->get('email');
       // return request('asunto')

       $mensaje=request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'
       ], [
           'email.required' => __('I need your email')
       ]);

       // Enviar Email

       Mail::to('luchoweb15@gmail.com')->send(new MessageReceived($mensaje));

       //return new MessageReceived($mensaje);
       return 'Mensaje Enviado';

    }
}
