<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'moon_db');

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // $passhash = password_hash($password, PASSWORD_DEFAULT);

    $s = "SELECT*FROM users_table WHERE fname = '$fname'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {

        $_SESSION['message1'] = "username is already taken!";
        header('Location:../sections/register.php');
    } else {
        $insert = "INSERT INTO users_table(fname,lname,email,password) VALUES('$fname', '$lname', '$email', '$password')";
        mysqli_query($conn, $insert);
        $_SESSION['message1'] = "Account created Successfully ";
        header('Location:../sections/login.php');
    }
}
