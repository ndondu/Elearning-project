<?php
session_start();


?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enrol|moonelearning</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!--=======fontawesome css========-->
    <link rel="stylesheet" href="./css/all.min.css">
    <!--=======styles css========-->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .header {
            display: flex;
        }

        @media only screen and (max-width: 600px) {
            .header {
                display: block;
            }
        }
    </style>

</head>

<body>




    <div class="container main-dash ">

        <div class="start-dash">

            <div class="page-wrapper chiller-theme toggled ">
                <a id="show-sidebar" class="btn btn-sm btn-primary" href="#">
                    <i class="fas fa-bars"></i>
                </a>
                <nav id="sidebar" class="sidebar-wrapper pt-2">
                    <div class="sidebar-content">
                        <div class="sidebar-brand">
                            <a href="#">Moon elearning</a>
                            <div id="close-sidebar">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                        <div class="sidebar-header">
                            <div class="user-pic">
                                <img class="img-responsive img-rounded" src="../images/university-avatar-education-icon-vector-1979314(1).jpg" alt="User picture">
                            </div>
                            <div class="user-info">
                                <span class="user-name text-dark"> <b> <?php echo $_SESSION['name'] ?> </b></span>
                                <span class="user-role">student</span>
                                <span class="user-status">
                                    <i class="fa fa-circle"></i>
                                    <span>Online</span>
                                </span>
                            </div>
                        </div>
                        <!-- sidebar-header  -->
                        <div class="sidebar-search">
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control search-menu" placeholder="Search course..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar-search  -->
                        <div class="sidebar-menu">
                            <ul>
                                <li class="header-menu">
                                    <span>General</span>
                                </li>
                                <li class="">
                                    <a href="./dashboard.php">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                    </a>

                                </li>
                                <li class="">
                                    <a href="./eventscalendar.php">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Events </span>
                                        <span class="badge badge-pill badge-danger">3</span>
                                    </a>

                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="far fa-gem"></i>
                                        <span>Dapartments</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Ict</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="">
                                    <a href="./enrollcourse.php">
                                        <i class="fa fa-chart-line" id="chart-line"></i>
                                        <span>All Courses</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Web Development</a>
                                            </li>
                                            <li>
                                                <a href="#">Android Programming</a>
                                            </li>
                                            <li>
                                                <a href="#">Networking</a>
                                            </li>
                                            <li>
                                                <a href="#">Graphic Design</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Activities</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Chess club</a>
                                            </li>
                                            <li>
                                                <a href="#">code challenge</a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>
                                <li>
                                    <a href="./news.php">
                                        <i class="fa fa-book"></i>
                                        <span>News and Announcements</span></a>
                                </li>
                                <li class="header-menu">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Documentation</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="./eventscalendar.php">
                                        <i class="fa fa-calendar"></i>
                                        <span>Calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bookmark"></i>
                                        <span>Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th"></i>
                                        <span>Attendance</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- sidebar-menu  -->
                    </div>
                    <!-- sidebar-content  -->
                    <div class="sidebar-footer">
                        <a href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-pill badge-warning notification">3</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-pill badge-success notification">7</span>
                        </a>
                        <a href="#">
                            <i class="fa fa-cog"></i>

                        </a>
                        <a href="../Includes/logout.php">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                </nav>

                <!--============= END NAVBAR ============ -->
                <!-- sidebar-wrapper  -->

                <!-- PAGE CONTENT DASHBOARD -->


                <main class="page-content">
                    <div class="container">
                        <div class=" moon-logo container  ">

                            <div class="row header">
                                <img src="../images/university-avatar-education-icon-vector-1979314(1).jpg" alt="">
                                <div class="header-title pt-5">
                                    <p class=" logo-text text-uppercase text-primary ">moon elearning school</p>
                                </div>
                            </div>

                        </div>


                    </div>


                    <!--end  page-content" -->


                    <!-- my courses page1 -->





                    <div class="all-courses pt-5">

                        <h5> <i class="fa fa-book " style="font-size: 1.3rem; "></i> &nbsp; Enroll courses</h5>
                        <div class="title-course">


                            <font class="text-danger" align="center"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?></font>
                        </div>
                        <div class="container pt-2 bg-white ">
                            <?php

                            $conn = mysqli_connect('localhost', 'root', '', 'moon_db');


                            $s = "SELECT id, course_name, tutor FROM courses
                            UNION 
                            SELECT course, course_id, user_id FROM my_courses
                            ORDER BY id";


                            $result = mysqli_query($conn, $s);
                            $t = 0;
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $t++;
                                    if ($t == 1) { ?>
                                        <div class="row courses pt-2">
                                            <div class="col-lg-4 course-container">


                                                <div class="image">

                                                    <figure class="snip0019">
                                                        <img src="../images/download.jpg" alt="sample11" / " class=" image-fluid">

                                                        <form action="../Includes/add.php" method="post">

                                                            <figcaption>
                                                                <div>
                                                                    <p class="text-uppercase">
                                                                        <input type="hidden" name="course_id" value="<?php echo $row['id']; ?>">
                                                                        <input type="hidden" name="course" value="<?php echo $row['course_name']; ?>">
                                                                        <button type="submit" class="btn-enroll" id="enroll" name="enroll" data-id=" <?php echo $row['course_name']; ?>">enroll course </button>

                                                                    </p>
                                                                </div>
                                                            </figcaption>
                                                        </form>

                                                    </figure>
                                                    <div class="course-text">
                                                        <p class="para text-dark">
                                                            <input type="hidden" name="course" value="<?php echo $row['course_name']; ?>">
                                                            <span class="course-name "><?php echo $row['course_name']; ?></span> <br>
                                                            <span class="tutor">Tutor:</span> <?php echo $row['tutor']; ?> <br>
                                                            <span class="enrolled">Students:</span> <span class="bg-light  num">45</span>
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- column 2 -->
                                        <?php } else if ($t == 3) { ?>
                                            <div class="col-lg-4 course-container">

                                                <div class="image">

                                                    <figure class="snip0019">
                                                        <img src="../images/download.jpg" alt="sample11" / " class=" image-fluid">

                                                        <form action="../Includes/add.php" method="post">

                                                            <figcaption>
                                                                <div>
                                                                    <p class="text-uppercase">

                                                                        <input type="hidden" name="course" value="<?php echo $row['course_name']; ?>">
                                                                        <input type="hidden" name="course_id" value="<?php echo $row['id']; ?>">
                                                                        <button type="submit" class="btn-enroll" id="enroll" name="enroll" data-id=" <?php echo $row['course_name']; ?>">enroll course </button>

                                                                    </p>
                                                                </div>
                                                            </figcaption>
                                                        </form>
                                                    </figure>
                                                    <div class="course-text">
                                                        <p class="para text-dark">
                                                            <input type="hidden" name="course" value="<?php echo $row['course_name']; ?>">
                                                            <span class="course-name "><?php echo $row['course_name']; ?></span> <br>
                                                            <span class="tutor">Tutor:</span> <?php echo $row['tutor']; ?> <br>
                                                            <span class="enrolled">Students:</span> <span class="bg-light  num">45</span>
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    <?php $t = 0;
                                    } else {
                                    ?>
                                        <div class="col-lg-4 course-container">

                                            <div class="image">

                                                <figure class="snip0019">
                                                    <img src="../images/download.jpg" alt="sample11" / " class=" image-fluid">

                                                    <form action="../Includes/add.php" method="post">

                                                        <figcaption>
                                                            <div>
                                                                <p class="text-uppercase">

                                                                    <input type="hidden" name="course" value="<?php echo $row['course_name']; ?>">
                                                                    <input type="hidden" name="course_id" value="<?php echo $row['id']; ?>">
                                                                    <button type="submit" class="btn-enroll" id="enroll" name="enroll" data-id=" <?php echo $row['course_name']; ?>">enroll course </button>

                                                                </p>
                                                            </div>
                                                        </figcaption>
                                                    </form>

                                                </figure>
                                                <div class="course-text">
                                                    <p class="para text-dark">
                                                        <input type="hidden" name="course" value="<?php echo $row['course_name']; ?>">
                                                        <span class="course-name "><?php echo $row['course_name']; ?></span> <br>
                                                        <span class="tutor">Tutor:</span> <?php echo $row['tutor']; ?> <br>
                                                        <span class="enrolled">Students:</span> <span class="bg-light  num">45</span>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>

                                    <?php
                                    }
                                }
                                if ($t < 3) {
                                    ?>
                        </div>
                <?php }
                            } ?>
                    </div>

                </main>

                <!-- ====end all courses page==== -->

            </div>

        </div>




    </div>

    <script>
        $(document).ready(function() {
            $('button').click(function() {
                course_name = $(this).data('id');
                alert(course_name);

                $.ajax({
                    url: './mycourses.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        course: course_name,


                    },
                    success: function(data) {
                        alert(data);
                    }
                }).fail(function(xhr, textstatus, errorThrown) {
                    // alert(xhr.responseText);
                })

            })

        })
    </script>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- dashboard navbar jquery -->
    <script src="../js/main.js"></script>
</body>

</html>