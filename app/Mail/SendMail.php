<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         
      if ($this->data['subject']=='contact') {

           return $this->from($this->data['email'])->subject('Contact us')->view('web/contactemail')->with('data', $this->data);
      }
      
      else{

         echo "Faild to mail";
      }




    }
}

?>