<?php

include_once("../header.php");

?>



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
                           /**
                            UNION 
                            SELECT course, course_id, user_id FROM my_courses
                            */
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