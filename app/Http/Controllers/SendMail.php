<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SendMail extends Controller
{
	
    public function index(){

    	return View("form")->with('title','LaraMail');
    }
    public function sendEmail(Request $request){
    	$mail = new \PHPMailer(true);
    	try{
    		$mail->isSMTP();
    		$mail->CharSet = 'utf-8';
    		$mail->SMTPAuth =true;
			$mail->SMTPSecure = env('MAIL_ENCRYPTION');
    		$mail->Host = env('MAIL_HOST'); //gmail has host > smtp.gmail.com
    		$mail->Port = env('MAIL_PORT'); //gmail has port > 587 . without double quotes
    		$mail->Username = env('MAIL_USERNAME'); //your username. actually your email
    		$mail->Password = env('MAIL_PASSWORD'); // your password. your mail password
    		$mail->setFrom(env('MY_EMAIL'), env('MY_NAME')); 
    		$mail->Subject = $request->subject;
    		$mail->MsgHTML($request->text);
    		$mail->addAddress($request->email , $request->name); 
    		$mail->send();
    	}catch(phpmailerException $e){
    		dd($e);
    	}catch(Exception $e){
    		dd($e);
    	}
    	if($mail){
    		return View("result")->with("result","success")->with("title","Success");
    	}else{
    		return View("result")->with("result","failed")->with("title","Failed");
    	}
    }
}
