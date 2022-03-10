<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactApp extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    private $arquivos;

    public $upload ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $arquivos)
    {
        $this->user = $user;
        $this->arquivos = $arquivos;
        $this->upload = false;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       if( $this->arquivos){
            foreach($this->arquivos as $file){
                $this->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(), 
                    'mime' => $file->getMimeType()
                ]);
            }
            $this->upload = true;
       }
       
        return $this->subject('Novo email recebido pelo app')
                ->view('email.contact');
    }
}
