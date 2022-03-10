<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\ContactApp;

class SendMailController extends Controller
{
    public function create()
    {

        // $user = new \stdClass();
        // $user->nome = "Wanderson Passos Barcelos";
        // $user->telefone = '27999447975';
        // $user->email = "wpbarcelos@gmail.com";


        // //Mail::send('welcome', [], function ($message) { $message->to('abcd@xyz.com')->subject('this works!'); });

        // try {
        //    Mail::to('siqueirasolucoesjuridicas@gmail.com')->send(new ContactApp($user));

        // } catch (\Throwable $th) {
        //     dd($th);
        // }

        // return 'formulario enviado com sucesso';

        // return view('sendmail.success');
        
        return view('sendmail.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'=>'required',
            'telefone'=>'required',
            'email'=>'required|email',
            'arquivo.*'=>'required|file|max:4096'
        ]);

    //     foreach($request->file('arquivo') as $arq){
    //         var_dump( $arq->getRealPath());
    // }

        $user = new \stdClass();
        $user->nome = $request->nome;
        $user->telefone = $request->telefone;
        $user->email = $request->email;


        Mail::to('siqueirasolucoesjuridicas@gmail.com')
            ->send(new ContactApp($user, $request->file('arquivo') ));

        // $files = [];
        // foreach($request->file('arquivo') as $file) {
        //     $files[] = $file->store('attachments');

        //     Storage::get('')

        // }

        // dd($files);


        return view('sendmail.success');
    }
}
