<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SendMail extends Controller
{
    // //
    // public function __construct(){
    // 	$this->middleware('auth');
    // }
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
    		$mail->Host = "smtp.gmail.com";
    		$mail->Port = 587;
    		$mail->Username = "bill.tanthowi.j@gmail.com";
    		$mail->Password = "Cybercer0!@#";
    		$mail->setFrom($request->email, $request->name);
    		$mail->Subject = $request->subject;
    		$mail->MsgHTML($request->text);
    		$mail->addAddress("xcodebill@gmail.com" ,"Bill Tanthowi Jauhari");
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
