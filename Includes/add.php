<?php
session_start();


/** eNROLLING COURSES */

if (isset($_POST['enroll'])) {


    $conn = mysqli_connect('localhost', 'root', '', 'moon_db');

    $course = $_POST['course'];
    $course_id = $_POST['course_id'];
    $user_id = $_SESSION['user_id'];

    $s = "SELECT * FROM my_courses where course_id = $course_id and user_id = $user_id";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num > 0) {

        $_SESSION['msg'] = "You are already enrolled!!";
        header("location:../sections/enrollcourse.php");
        exit();
    }

    $insert = "INSERT INTO my_courses(course, course_id, user_id) VALUES('$course', '$course_id','$user_id  ')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        $_SESSION['msg'] = "Enrolled Successfully !!";
        header("location:../sections/dashboard.php");
    } else {
        $_SESSION['msg'] = "course enroll failed !!";
        header("location:../sections/enrollcourse.php");
    }
}


/** ADD QUIZZES */

if (isset($_POST['addquiz'])) {

    include_once('./connect.php');

    $course_id = $_POST['course_id'];
    $quiz_title = $_POST['quiztitle'];
    $quiz_time = $_POST['quiztime'];

    $sql1 = mysqli_query($conn, "INSERT INTO quiz(course_id, quiz_title, quiz_time) VALUES('$course_id',' $quiz_title', '$quiz_time')");
    $_SESSION['quizadd'] = "Quiz Added Successfully !!";


    header("Location: ../moderator/quiz.php?id=$course_id");
}


/** DELETE QUIZ */

if (isset($_POST['deletequiz'])) {

    include_once('./connect.php');

    $course_id = $_POST['course_id'];
    $id = $_POST['quizid'];

    $sql = mysqli_query($conn, "DELETE FROM `quiz` WHERE id = $id");

    header("Location: ../moderator/quiz.php?id=$course_id");
}
