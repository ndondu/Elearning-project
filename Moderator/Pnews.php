<?php

include_once("../mheader.php");

?>
<div class=" container  ">
    <font class="text-success"><?php echo htmlentities($_SESSION['!updatenews']); ?><?php echo htmlentities($_SESSION['!updatenews'] = ""); ?></font>

    



</div>

<div class=" row ">

    <h4 class="course_name bg-light pt-5" style="width:100%; border-left:2px solid #4f7bda; border-bottom:4px solid #4f7bda; padding:1rem; ">
        News and Announcements
    </h4><br><br>

    <?php
    include "../Includes/connect.php";
    $query = mysqli_query($conn, "SELECT news.id , news.title, news.message, news.posted, news.user_id,
                                    users_table.id as nid, users_table.fname, users_table.lname
                                     from users_table
                                     inner join news on  news.user_id = users_table.id order by news.id desc
                                     ");

    if (mysqli_num_rows($query)) {


        while ($row = mysqli_fetch_array($query)) {
    ?>

            <div class=" col-lg-12 bg-white mt-5 ">
                <form action="../Includes/edit.php" method="post">


                    <div>



                        <p class="posted-by">
                            <input type="hidden" name="eid" value="<?php echo $row['id']; ?>">
                            <input type="text" name="title" value="<?php echo $row['title']; ?>" style="width:500px;"><br>

                            Posted By: <span><?php echo $row['fname'] . " " . $row['lname']  ?></span> on <span><?php echo $row['posted'] ?></span>
                        </p>
                    </div>

                    <p>

                        <textarea type="text" name="message" cols="100" rows="5"><?php echo $row['message'] ?></textarea>
                    </p>

                    <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                </form>

            </div>





    <?php }
    } else {
        echo '<div class="alert alert-success" style="font: size 1.2rem;">There is no news posted</div>';
    } ?>
</div>
</div>


</main>

<!--end  page-content" -->



</div>

</div>




</div>



<!-- Modal -->
<div class="pop-conainer">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../Includes/news.php" method="post">
                    <div class="modal-body">
                        <div class="col-lg-12">

                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div><br>
                        <div class="col-lg-12">
                            <textarea name="message" cols="20" rows="5" type="text" class="form-control" placeholder="message"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="post" class="btn btn-primary">Post</button>
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