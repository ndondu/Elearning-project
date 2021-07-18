<?php

session_start();



if(isset($_POST['edit'])){

    include './connect.php' ;

    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    mysqli_query($conn, "UPDATE news SET title = '$title', message = '$message' where user_id = '$user_id' ");
    $_SESSION['!updatenews'] = "News updated successfully!";
  



}
if (isset($_POST['editprofile'])) {

    include './connect.php' ;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $user_id = $_POST['uid'];
    $password = $_POST['password'];
    mysqli_query($conn, "UPDATE users_table SET fname = '$fname', lname = '$lname', email = '$email',  password = '$password' where id = '$user_id'");
    header('location:../sections/dashboard.php');
    $_SESSION['updateprofile'] = "Profile Updated successfully!";
   
}
else{
   
    $_SESSION['!update'] = "update failed!";
   // header("Location: ../moderator/Pnews.php");
}
?>