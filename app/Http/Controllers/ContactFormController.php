<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(){
        // dd(request()->all());
        $data= request()->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'message'=>'max:1000'
        ],
        [
            'name.required' => 'Por favor ingrese su nombre',
            'email.required'=>'Por favor ingrese su e-mail',
            'message.max:1000'=> 'El mensaje no puede exceder los 1000 caracteres'
        ]);

        Mail::to('juanmguzmann@gmail.com')->send(new ContactFormMail($data));
        return redirect()->back()->with('message', 'El formulario ha sido enviado correctamente');
        // $rules = [
        //     'name' => 'required',
        //     'email' => 'required|email:filter'
        // ];
    
        // $customMessages = [
        //     'name.required' => 'Por favor ingrese su nombre',
        //     'email.required'=>'Por favor ingrese su e-mail',
        //     'email.email:filter'=>'Por favor ingrese un mail valido'
        // ];
        
        // $this->validate($data, $rules, $customMessages);

    }
    
}
