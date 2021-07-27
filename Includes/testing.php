<?php
	session_start();
	
	include_once("conn.php");

	$subject = "";
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	if($body == 'Confirm'){
		if(isset($_SESSION['id'])){
			$body = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
			$_SESSION['code'] = $body;
			$subject = "Confirm";
			echo "found ".$body." ";
		}else{
			$email = "";
			echo "not found ";
		}
	}

	use PHPMailer\PHPMailer\PHPMailer;
	require_once("PHPMailer/PHPMailer.php");
	require_once("PHPMailer/SMTP.php");
	require_once("PHPMailer/Exception.php");

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'mail.kapul.co.ke';
	$mail->Port = 465;
	$mail->isHTML(true);
	$mail->Username = 'noreply@kapul.co.ke';
	$mail->Password = 'Kapul@254';
	$mail->SetFrom('no-reply@kapul.co.ke','Kapul');

	$mail->Subject = $subject;
	$mail->Body = '<br/><br/><b>'.$body.'</b>'.' <br/>Please enter this code to change your password.';
	$mail->AddAddress($email);

	if($mail->Send()){

		echo "Done";

	}else{
		echo $mail->ErrorInfo;
	}
?>