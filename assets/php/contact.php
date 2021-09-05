<?php

require_once 'mail.php';

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
    $message = "Name: $name <br> Mail: $email<br>Text: $message";
    $message_nohtml = "Name: $name  Mail: $email  Text: $message";
	
	$to      = 'draackul2@gmail.com';
	$subject = 'AugCat blog';

//	$headers = 'From: '. $email . "\r\n" .
//    'Reply-To: '. $email . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
    
    $status = send_mail($to, $subject, $email, $message, $message_nohtml);
//	$status = mail($to, $subject, $message, $headers);

	if($status === 'Successful'){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = $status;
	}
	
	
	echo json_encode($res);
}

?>