<?php
session_start();


$message = "";
if (count($_POST) > 0) {
  $con = mysqli_connect('localhost', 'root', '', 'moon_db');
  $result = mysqli_query($con, "SELECT * FROM users_table WHERE email='" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'");

  $password =  $_POST["password"];

  if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {


      $_SESSION["email"] = $row["email"];
      $_SESSION["fname"] = $row["fname"];
      $_SESSION["lname"] = $row["lname"];
      $_SESSION["user_id"] = $row["id"];
      $_SESSION["password"] = $row["password"];
      $_SESSION["is_staff"] = $row["is_staff"];





      $row["is_staff"] == 1 ?

        header('location:../moderator/mdashboard.php') : header('location:../sections/dashboard.php');
      $_SESSION['message'] = "Login successfull";
    }
  } else {


    $_SESSION['message'] = "Invalid email or Password!";
    header('Location:../sections/login.php');
  }
}



?>





