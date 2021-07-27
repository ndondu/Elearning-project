<?php

include_once ('connect.php');

if(isset($_POST['submit'])){
    $course = $_POST['course'];
    $title = $_POST['title'];
    $decription = $_POST['description'];
    $date_time= $_POST['date_time'];
    $exam_duration= $_POST['exam_duration'];

    $query = mysqli_query($conn, "INSERT INTO exams(course,title,description,date_time,exam_duration )
     VALUES('$course',	'$title',	'$description',	'$date_time','$exam_duration' ");
}
?>