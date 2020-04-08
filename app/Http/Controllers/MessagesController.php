<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(/*Request $request*/) {
       // return $request->get('email');
       // return request('asunto')

       request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'
       ], [
           'email.required' => __('I need your email')
       ]);

       return 'Datos enviados correctamente';

    }
}
