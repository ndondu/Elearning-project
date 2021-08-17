<?php

session_start();

/**EDIT NEWS AND ANNOUNCEMENTS */

if (isset($_POST['edit'])) {

    include './connect.php';

    $title = $_POST['title'];
    $message = $_POST['message'];
    $news_id = $_POST['eid'];

    mysqli_query($conn, "UPDATE news SET title = '$title', message = '$message' where id = ' $news_id' ");
    header('location:../moderator/Pnews.php');
    $_SESSION['!updatenews'] = "News updated successfully!";
} else {
    $_SESSION['!updatenews'] = "Failed to update news. Try again.!";
}

/** EDIT USER PROFILE */


if (isset($_POST['editprofile'])) {

    include './connect.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $user_id = $_POST['uid'];
    $password = $_POST['password'];
    mysqli_query($conn, "UPDATE users_table SET fname = '$fname', lname = '$lname', email = '$email',  password = '$password' where id = '$user_id'");
    header('location:../sections/dashboard.php');
    $_SESSION['updateprofile'] = "Profile Updated successfully!";
} else {

    $_SESSION['!updateprofile'] = "update failed!";
    // header("Location: ../moderator/Pnews.php");
}

/** EDIT LESSON*/



/** EDIT QUIZ */

if (isset($_POST['updatequiz'])) {

    include './connect.php';

    $course_id = $_POST['course_id'];
    $quiz_id = $_POST['quiz_id'];
    $quiz_title = $_POST['quiztitle'];
    $quiz_time = $_POST['quiztime'];

    mysqli_query($conn, "UPDATE quiz SET   quiz_title = ' $quiz_title',  quiz_time = ' $quiz_time' where id = ' $quiz_id ' ");
    header("Location: ../moderator/quiz.php?id=$course_id");
}
