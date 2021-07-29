<?php
session_start();

if (isset($_POST['post'])) {
    include 'connect.php';

    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    $query = mysqli_query($conn, "INSERT INTO news(title, message, user_id ) VALUES('$title', '$message', '$user_id')");
    header("Location: ../moderator/Pnews.php");
}

if(isset($_POST['postcoursenews'])){

    include 'connect.php';

    $course_id = $_POST['course_id'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    $query = mysqli_query($conn, "INSERT INTO coursenews(course_id, title, message, user_id) VALUES('$course_id', '$title', '$message', '$user_id')");


}
