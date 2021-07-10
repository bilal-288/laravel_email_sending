<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use DB;
use Session;
class mailController extends Controller
{
    function contact(Request $res)
    {
        
     return view('web/contact');
    }
	

public function contact_email(Request $res){
    
    $data=[
        
        'name' => $res->input('name'),
        'email' => $res->input('email'),
        'message' => $res->input('message'),
        
        'subject'=>'contact',
        
        ];
        
        Mail::to('bilal.mehdi.umt@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
}
  
}





    	

