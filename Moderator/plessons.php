<?php
include_once("../mheader.php");

?>
<!-- 
                            <div class=" moon-logo container  ">

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <img src="../images/university-avatar-education-icon-vector-1979314(1).jpg" alt="">

                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 pt-5" style="margin-left: -5rem;">
                                    <p class=" logo-text text-uppercase text-primary ">Moon Academy</p>
                                </div>
                            </div>

                        </div>
                        -->
<div class="">


    <?php
    include "../Includes/connect.php";

    $cid = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM courses where id = '$cid' ");
    while ($row1 =  mysqli_fetch_assoc($result)) {
    ?>

        <div class="course_name bg-light pt-4" style="width:100%; border-left:2px solid #4f7bda; border-bottom:4px solid #4f7bda; padding:1rem; ">
            <h4><?php echo $row1['course_name']; ?> </h4>


        </div>
    <?php } ?>
</div>

<div class="row pt-3">
    <div class="col-md-12 ">
        <button class=" btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" style=" float:center;"><i class="fa fa-book"></i> &nbsp; New</button>
        <button class=" btn  btn-outline-primary" data-toggle="modal" data-target="#exampleModal3" > Edit </button>
        <button class="course-dash btn btn-primary" data-toggle="modal" data-target="#exampleModal2" style="border: none; float:right;"> <i class="fa fa-bookmark"></i> &nbsp; Course dashboard</button>
    </div>
    <!-- 
        <div class="row mt-3">

        <i class="fa fa-book" style="font-size:1.1rem;"> &nbsp; <a href="./plessonnews.php?id=<?php echo $cid ?>">Course Announcements</a></i>

    </div>
    -->
</div>

<div class="row pt-2 ">
    <?php
    include "../Includes/connect.php";

    $cid = $_GET['id'];

    $result = mysqli_query($conn, "SELECT lesson.id as lid, lesson.course_id,lesson.topic, lesson.title, lesson.description, lesson.notes, lesson.classroom, lesson.url, 
                             courses.id as cid , courses.course_name 
                             from courses 
                             inner join lesson on lesson.course_id = courses.id where courses.id =  '$cid'  ");
    while ($row =  mysqli_fetch_array($result)) {
    ?>

        <form action="../Includes/add.php" method="post">

            <div class="col-lg-3 col-md-6 col-lg-12 pt-2 bg-light" style="margin-top:2rem; " id="<?php echo $row['id']; ?>">


                <div class="title"">
                                        <h4><?php echo $row['topic']; ?></h4u>
                                            <h5 class=" pt-3"><?php echo $row['title']; ?></h5>
                    <p class="pt-1 chapter_description" id="description">
                        <?php echo $row['description']; ?>
                    </p>
                    <div class="more pt-2">
                        <ul>

                            <li>
                                <i class="fa fa-book"></i> &nbsp; Notes <br>
                                <span class="pt-3"> <a href="../Includes/download.php?file=<?php echo $row['notes'];  ?>"> <i class="fa fa-download text-primary">&nbsp; download</i> </a></span>


                            <li class="pt-3"><i class="fa fa-file"></i> &nbsp; assignment</li>
                            <li class="pt-3">
                                <i class="fa fa-video"></i> &nbsp; Classroom <br>
                                <div class="pt-1">
                                    <p>Password:&nbsp;<?php echo $row['classroom']; ?></p>
                                    <span> <a href="<?php echo $row['url']; ?>">join meeting</a></span>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <input type="hidden" name="lessonid" value="<?php echo $row['lid']; ?> ">
                <input type="hidden" name="courseid" value="<?php echo $row['cid']; ?> ">
                <button type="submit" name="deletelesson" class="btn btn-danger ">Delete</button>
              
               <!-- 
                    <button type="submit" name="editlesson" class="btn btn-primary ">Edit</button>
                -->

        </form>

</div>



<?php } ?>



<!-- Modal -->

<div class="pop-conainer">
    <div class="modal light bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Add Lesson</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <form action="../Includes/add.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <textarea name="id"> <?php echo $cid; ?></textarea>
                            <!-- 
                                    <input type="text" name="id" class="form-control" value="<?php echo $cid; ?>" >
                                -->
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="topic" class="form-control" placeholder="topic">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div><br>
                        <div class="col-lg-12">
                            <textarea name="description" cols="20" rows="5" type="text" class="form-control" placeholder="description"></textarea>
                        </div><br>

                        <div class="col-lg-12">
                            <input type="file" name="notes" class="form-control" placeholder="">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="classroom" class="form-control" placeholder="meeting pass">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="url" name="url" class="form-control" placeholder="meeting link">
                        </div><br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="addlesson" class="btn btn-primary">Add Lesson</button>
                    </div>
                </form>


            </div>
        </div>
    </div>


    <div class="modal light bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Edit Lesson</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php
    include "../Includes/connect.php";

    $cid = $_GET['id'];

    $result = mysqli_query($conn, "SELECT lesson.id as lid, lesson.course_id,lesson.topic, lesson.title, lesson.description, lesson.notes, lesson.classroom, lesson.url, 
                             courses.id as cid , courses.course_name 
                             from courses 
                             inner join lesson on lesson.course_id = courses.id where courses.id =  '$cid'  ");
    while ($row =  mysqli_fetch_array($result)) {
    ?>

                <form action="../Includes/edit.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="col-lg-12">
                          <!--   <textarea name="id"> <?php echo $cid; ?></textarea> -->
                            
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $cid; ?>" >
                                
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="topic" class="form-control" value="<?php echo $row['topic']; ?>">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="title" class="form-control"  value="<?php echo $row['title']; ?>">
                        </div><br>
                        <div class="col-lg-12">
                            <textarea name="description" cols="20" rows="5" type="text" class="form-control" value=" "><?php echo $row['description']; ?></textarea>
                        </div><br>

                        <div class="col-lg-12">
                            <input type="file" name="notes" class="form-control"  value="<?php echo $row['notes']; ?>">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="classroom" class="form-control"  value="<?php echo $row['classroom']; ?>">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="url" name="url" class="form-control"  value="<?php echo $row['url']; ?>">
                        </div><br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="editlesson" class="btn btn-primary">Update Lesson</button>
                    </div>
                </form>

<?php } ?>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bars" style="font-size: 1.2rem;"></i> &nbsp; Activities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <a href="./plessonnews.php?id=<?php echo $cid ?>"><i class="fa fa-globe"></i>&nbsp; Announcements</a> <br>
                        <a href="./quiz.php?id=<?php echo $cid ?>" class="mt-4"> <i class="fa fa-file"></i>&nbsp; Quizzes</a><br>

                    </div>

                    <div class="modal-footer">
                        <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



</div>






</div>
</div>


</div>
</div>
</div>
</div>
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
<!-- 
    
<script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
 -->
</body>

</html>