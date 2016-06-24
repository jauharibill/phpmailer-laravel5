# PHPMailer in Laravel 5 Framework


PHPMailer on Laravel 5 . phpmailer is one of the most library that used to send email for free. now I wanna use it in laravel 5 framework

How to use it?

1. edit composer.json

2. add package to require-dev

	  > "phpmailer/phpmailer":"dev-master"
    
3. enter command

      > composer update
      
4. then craete controller and feel it with method that contain the following code

			
         $mail = new \PHPMailer(true);
    	try{
    		$mail-isSMTP();
    		$mail-CharSet = ; #set it utf-8
    		$mail-SMTPAuth = ; #set it true
    		$mail-SMTPSecure = 'tls';
    		$mail-Host = ; #gmail has host  smtp.gmail.com
    		$mail-Port = ; #gmail has port  587 . without double quotes
    		$mail-Username = ; #your username. actually your email
    		$mail-Password = ; # your password. your mail password
    		$mail-setFrom($request-email, $request-name); 
    		$mail-Subject = $request-subject;
    		$mail-MsgHTML($request-text);
    		$mail-addAddress([resipientemail] ,[namerecipient]); 
    		$mail-send();
    	}catch(phpmailerException $e){
    		dd($e);
    	}catch(Exception $e){
    		dd($e);
    	} 
    
    


see example code in this repository. clone it look for > SendMail.php at Controller folder
 
 
 I've got clean testing and successful with my mail.
 if you are getting error, feel free to contact me or lay issues. i will response it as soon as possible.
 
- Update  : 25-June-2016
- Homepage Example : [https://phpmailer.herokuapp.com/](# PHPMailer in Laravel 5 Framework   PHPMailer on Laravel 5 . phpmailer is one of the most library that used to send email for free. now I wanna use it in laravel 5 framework  How to use it?  1. edit composer.json  2. add package to require-dev  	  > "phpmailer/phpmailer":"dev-master"      3. enter command        > composer update        4. then craete controller and feel it with method that contain the following code  	> $mail = new \PHPMailer(true); 