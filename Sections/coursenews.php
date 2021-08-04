<?php

include_once("../header.php");

?>


<div class=" container  ">

</div>

<div class=" row ">

    <h4 class="course_name bg-light pt-5" style="width:100%; border-left:2px solid #4f7bda; border-bottom:4px solid #4f7bda; padding:1rem; ">
        Announcements
    </h4><br>




    <?php
    include "../Includes/connect.php";
    $nid = $_GET['id'];

    $query = mysqli_query($conn, "SELECT 
    coursenews.id ,coursenews.course_id, coursenews.title, coursenews.message, coursenews.posted, coursenews.user_id,
    users_table.id, users_table.fname, users_table.lname,
    courses.id
    from users_table
    inner join coursenews on coursenews.user_id = users_table.id 
    inner join courses on courses.id = coursenews.course_id where coursenews.course_id = $nid
                                     ");

    if (mysqli_num_rows($query)) {


        while ($row = mysqli_fetch_array($query)) {
    ?>

            <div class=" col-lg-12 mt-5 ">
                <div class="container">

                    <div class="card">
                        <div class="card-header">
                            <p> <span style="font-size: 1.2rem; font-weight: 600;"> <?php echo $row['title'] ?></span> <br>
                                Posted By: <span class="text-dark " style="font-weight: 600;"> <?php echo $row['fname'] . " " . $row['lname']  ?></span></span> on <span><?php echo $row['posted']; ?></span></p>
                        </div>
                        <div class="card-body">
                            <p><?php echo $row['message'] ?></p>
                        </div>

                    </div>
                </div>
            </div>

    <?php }
    } else {
        echo '<div class="alert alert-danger mt-5" style="font: size 1.2rem;">No Announcements have been posted yet.</div>';
    }
    ?>
</div>
</div>


</main>

<!--end  page-content" -->



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