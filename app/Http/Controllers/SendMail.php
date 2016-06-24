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
    		$mail->SMTPSecure = 'tls';
    		$mail->Host = "host"; //gmail has host > smtp.gmail.com
    		$mail->Port = "port"; //gmail has port > 587 . without double quotes
    		$mail->Username = "youremail@domain.com"; //your username. actually your email
    		$mail->Password = "yourpassword"; // your password. your mail password
    		$mail->setFrom($request->email, $request->name); 
    		$mail->Subject = $request->subject;
    		$mail->MsgHTML($request->text);
    		$mail->addAddress("recipientemail" ,"namerecipient"); 
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
