<?php

include_once("../header.php");

?>



<div class=" moon-logo  ">

    <div class="  row">
        <?php if (isset($message)) {
            echo $message;
        } ?>

    </div>

</div>


<div class="row pt-5 ">
    <div class="col-md-12 col-lg-12 bg-white ">
        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
            used in laying out print, graphic or web designs. The passage is attributed
            to an unknown typesetter in the 15th century who is thought to have scrambled
            parts of Cicero's De Finibus
            Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
    </div>


</div>
</div>


<!--end  page-content" -->


<!-- my courses page1 -->
<div class="all-courses ">

<img src="../images/logo.png" alt="" height="70" width="100">


    <h5 class="pt-5"> <i class="fa fa-book " style="font-size: 1.3rem; "></i> &nbsp; My courses</h5>
    <div class="title-course">

        <font class="text-success" align="center"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?></font>
    </div>
    <div class="all-courses pt-5">



        <div class="container pt-2 bg-white ">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'moon_db');

            $s = "SELECT users_table.id, my_courses.id as myid, my_courses.course, my_courses.course_id, my_courses.user_id, courses.id as cid, courses.course_name
                                      from users_table
                                      inner join my_courses on my_courses.user_id = users_table.id 
                                      inner join courses on my_courses.course_id = courses.id  where my_courses.user_id = '" . $_SESSION['user_id'] . "'";
            // $s = "SELECT*FROM my_courses where user_id = '" . $_SESSION['user_id'] . "' ";
            $result = mysqli_query($conn, $s);
            $t = 0;
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $t++;
                    if ($t == 1) { ?>
                        <div class="row courses pt-2">
                            <div class="col-lg-4 course-container" id="<?php echo $row['course_id']; ?>">

                                <div class="image">

                                    <figure class="snip0019">
                                        <img src="../images/download.jpg" alt="sample11" / " class=" image-fluid">


                                    </figure>
                                    <div class="course-text">
                                        <p class="para text-dark">
                                            <a href="./lesson.php?id=<?php echo $row['cid']; ?>"> <span class="course-name "><?php echo $row['course']; ?></span></a>
                                        </p>

                                    </div>

                                </div>
                            </div>
                            <!-- column 2 -->
                        <?php } else if ($t == 3) { ?>
                            <div class="col-lg-4 course-container" id="<?php echo $row['course_id']; ?>">

                                <div class="image">

                                    <figure class="snip0019">
                                        <img src="../images/download.jpg" alt="sample11" / " class=" image-fluid">


                                    </figure>
                                    <div class="course-text">
                                        <p class="para text-dark">
                                            <input type="hidden" name="course" value="<?php echo $row['course']; ?>">
                                            <a href="./lesson.php?id=<?php echo $row['cid']; ?>"> <span class="course-name "><?php echo $row['course']; ?></span></a>

                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php $t = 0;
                    } else {
                    ?>
                        <div class="col-lg-4 course-container" id="<?php echo $row['course_id']; ?>">

                            <div class="image">

                                <figure class="snip0019">
                                    <img src="../images/download.jpg" alt="sample11" / " class=" image-fluid">


                                </figure>
                                <div class="course-text">
                                    <p class="para text-dark">
                                        <input type="hidden" name="course" value="<?php echo $row['course']; ?>">
                                        <a href="./lesson.php?id=<?php echo $row['cid']; ?>"> <span class="course-name "><?php echo $row['course']; ?></span></a>

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
</div>


<!-- ====end all courses page==== -->

</div>

</div>




</div>




<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- dashboard navbar jquery -->
<script src="../js/main.js"></script>
</body>

</html>