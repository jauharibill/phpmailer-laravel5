# PHPMailer in Laravel 5 Framework


PHPMailer on Laravel 5 . phpmailer is one of the most library that used to send email for free. now I wanna use it in laravel 5 framework

How to use it?

1. edit composer.json

2. add package to require-dev

	  > "phpmailer/phpmailer":"dev-master"
    
3. enter command

      > composer install
      
4. then craete controller and feel it with method that contain the following code

			
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
    
5. modify your .env file into like this

	MAIL_DRIVER=smtp
	MAIL_HOST=mailtrap.io
	MAIL_PORT=2525
	MAIL_USERNAME=null
	MAIL_PASSWORD=null
	MAIL_ENCRYPTION=null

	MY_EMAIL="bill@engineer.com"
	MY_NAME="Bill Tanthowi Jauhari"

note : I was add some constant variable that called `MY_EMAIL` and `MY_NAME` feel free to change it to be yours, and dont forget to fill `MAIL CONFIG` at above configuration to make your email works!


see example code in this repository. clone it look for > SendMail.php as Controller 
 
 
 I've got clean testing and successful with my mail.
 if you are getting error, feel free to contact me or lay issues. i will response it as soon as possible.
 
- Update  : 13-11-2018
- Homepage Example : [PHPMAILERDEMO](https://phpmailer.herokuapp.com/ "PHPMAILERDEMO")