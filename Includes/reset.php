<?php


require 'connect.php';

if (isset($_POST["request-submit"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/moonlms/sections/create-new-password.php?selector=" . $selector . "&valdator=" . bin2hex($token);

    $expires = date("U") + 1800;

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM passreset WHERE passResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        echo "an error occured!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO passreset (passResetEmail, passResetSelector, passResetToken, passResetExpires ) VALUES (?,?,?,?); ";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        echo "an error occured!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);



    $to = $userEmail;

    $subject = 'Reset your password for moon e-learning';

    $message = '<p> We received a password reset request. The lnk to reset your password is below, if you did not make this
    request you can ignore this email.</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a> </p>';

    //  $headers = " From:  'ndondugrace88@gmail.com'\r\n";
    //  $headers .= "Reply-To : ndondugrace88@gmail.com\r\n ";
    //  $headers .= " Content-type : text/html\r\n ";

    /* mail($to, $subject,  $message, $headers);*/
} else {
    header("Location: ../sections/login.php");
}



use PHPMailer\PHPMailer\PHPMailer;

require_once("../PHPMailer/PHPMailer.php");
require_once("../PHPMailer/SMTP.php");
require_once("../PHPMailer/Exception.php");

// try {



$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->isHTML(true);
$mail->Username = 'ndondugrace88@gmail.com';
$mail->Password = '07@@&!((&$';

//$mail->setFrom($headers);
$mail->SetFrom('ndondugrace88@gmail.com', 'moon');

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAddress($to);

if ($mail->Send()) {

    echo "email sent successfully";
} else {
    echo $mail->ErrorInfo;
}


    /*    $mail->send();

        echo "success";
        exit();
    } catch (Exception $e) {
        echo $mail->ErrorInfo;
        exit();
    }




    header("Location: ../sections/forget.php?reset=success");*/
