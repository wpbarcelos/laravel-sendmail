<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function create()
    {

       
        $user = new \stdClass();
        $user->nome = "Wanderson Passos Barcelos";
        $user->telefone = '27999447975';
        $user->email = "wpbarcelos@gmail.com";


        try {
           \Mail::send(new \App\Mail\ContactApp($user));

        } catch (\Throwable $th) {
            dd($th);
        }

        return 'formulario enviado com sucesso';
        
        return view('sendmail.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'=>'required',
            'telefone'=>'required',
            'email'=>'required|email',
            'arquivo.*'=>'required|file'
        ]);

        // $files = [];
        // foreach($request->file('arquivo') as $file) {
        //     $files[] = $file->store('attachments');

        //     Storage::get('')

        // }

        // dd($files);


        return view('sendmail.success');
    }
}
