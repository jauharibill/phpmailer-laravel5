# PHPMailer in Laravel 5 Framework
PHPMailer on Laravel 5 . phpmailer is one of the most library that used to send email for free. now I wanna use it in laravel 5 framework

How to use it?

1. edit composer.json
2. add package to require-dev
      "phpmailer/phpmailer":"dev-master"
3. enter command
      composer update
4. then craete controller and feel it with method that contain the following code

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
    die('success');


Add it to `application/bundles.php`:

    return array(
        ...
        'phpmailer' => array(
            'auto'  => true
        ),
        ...
    );

To get a PHPMailer instance:

    $mailer = IoC::resolve('phpmailer');

Then, use it just like you normally might:

    try {
        $mailer->AddAddress( $user->email, $user->name );
        $mailer->Subject  = "Laravel Rocks";
        $mailer->Body     = "Hi! Laravel is awesomesauce!";
        $mailer->Send();
    } catch (Exception $e) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $e->getMessage();
    }

The default "From:" address -- among other settings -- can be defined in the configuration file.

* * *

Includes *PHPMailer - Full Featured Email Transfer Class for PHP*

- Version: 5.2.1 (January 16, 2012)
- Homepage: https://code.google.com/a/apache-extras.org/p/phpmailer/
