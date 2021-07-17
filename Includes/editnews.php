<?php

session_start();



if(isset($_POST['edit'])){

    include './connect.php' ;

    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    mysqli_query($conn, "UPDATE news SET title = '$title', message = '$message' where user_id = '$user_id' ");
  



}else{
   
    $_SESSION['!update'] = "Failed to edit news!";
   // header("Location: ../moderator/Pnews.php");
}
?>