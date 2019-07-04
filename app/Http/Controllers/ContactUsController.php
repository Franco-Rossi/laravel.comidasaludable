<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUsPost(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
 
       ContactUs::create($request->all());
        Mail::send('templates.email',
        array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
        ), function($message)
       {
       $message->from('comidasaludable.contacto@gmail.com');
       $message->to('comidasaludable.contacto@gmail.com', 'Admin')
       ->subject('Contact Form Query');
      });
   return redirect('/#consultas')->with('success', '¡Gracias por contactarnos! Pronto recibiras nuestra respuesta.');
   }
}
