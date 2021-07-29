<?php

include_once("../header.php");

?>




<div class="row ">

    <h4 class="course_name bg-light pt-5" style="width:100%; border-left:2px solid #4f7bda; border-bottom:4px solid #4f7bda; padding:1rem; ">
        News and Announcements
    </h4><br><br>
    <?php
    include "../Includes/connect.php";
    $query = mysqli_query($conn, "SELECT news.id, news.title, news.message, news.posted, news.user_id,
                             users_table.id as nid, users_table.fname, users_table.lname
                              from users_table
                              inner join news on  news.user_id = users_table.id order by news.id desc
                              ");

    if (mysqli_num_rows($query)) {

        while ($row = mysqli_fetch_array($query)) {

    ?>

            <div class="col-lg-12 bg-white pt-1 mt-4 ">


                <p class="posted-by" style="background-color: #fff;  padding-top: 1rem;">
                    <span class="topic"><?php echo $row['title']; ?></span><br>
                    Posted By: <span class="text-dark " style="font-weight: 600;"><?php echo $row['fname'] . " " . $row['lname'] ?> </span> on <span><?php echo $row['posted']; ?></span>
                </p>

                <p>
                    <?php echo $row['message']; ?>
                </p>

            </div>
            <br>
    <?php }
    } else {
        echo '<div class="alert alert-danger">There is no news posted</div>';
    } ?>

</div>
</div>
</div>

<!--end  page-content" -->




<!-- <div class="pop-container">
        <div class="pop-content">

        </div>
    </div> -->



<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- dashboard navbar jquery -->
<script src="../js/main.js"></script>
</body>

</html>