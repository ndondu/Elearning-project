<?php

include_once("../mheader.php");

?>


<div class=" container  ">

</div>

<div class=" row ">

    <div class="row">
        <div class="col-lg-12 ">
            <button class=" btn btn-primary" data-toggle="modal" data-target="#coursenews" style="border: none; float:center;"><i class="fa fa-book"></i> &nbsp; New Announcement</button>
        </div>
    </div>


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
        echo '<div class="alert alert-danger mt-5 " style="font: size 1.2rem;">No announcement posted, click on new announcement to post</div>';
    }
    ?>
</div>
</div>


</main>

<!--end  page-content" -->



</div>

</div>




</div>



<!-- Modal -->
<div class="pop-conainer">
    <div class="modal fade" id="coursenews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">post Announcements</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../Includes/news.php" method="post">
                    <div class="modal-body">
                        <div class="col-lg-12">

                            <input type="hidden" name="course_id" class="form-control" value="<?php echo $nid ?>">

                        </div><br>
                        <div class="col-lg-12">

                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div><br>
                        <div class="col-lg-12">
                            <textarea name="message" cols="20" rows="5" type="text" class="form-control" placeholder="message"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="postcoursenews" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
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