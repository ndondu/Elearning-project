<?php

include_once("../mheader.php");

?>



<div class="row ">

    <?php
    $qid = $_GET['id'];
    ?>

    <div class="col-lg-12 bg-white ">
        <h4>Course Quizzes</h4>
    </div>
</div>
<div class="row mt-4 bg-light ">
    <div class="col-lg-5 pt-2 bg-white">
        <div class="card ">
            <div class="card-header">
                <h5 class="text-primary">Edit Quiz</h5>
            </div>

            <div class="card-body">

                <?php

                include_once('../includes/connect.php');




                $res = mysqli_query($conn, "SELECT * FROM quiz WHERE id = $qid");



                while ($row = mysqli_fetch_assoc($res)) {

                ?>


                    <form action="../Includes/edit.php" method="post">
                        <div class="modal-body">


                            <div class="col-lg-12">
                                <input type="hidden" name="course_id" class="form-control" value="<?php echo $row['course_id']; ?>">
                            </div><br>



                            <div class="col-lg-12">
                                <input type="hidden" name="quiz_id" class="form-control" value="<?php echo $qid ?>">
                            </div><br>

                            <div class="col-lg-12">

                                <input type="text" name="quiztitle" class="form-control" value="<?php echo $row['quiz_title']; ?>">
                            </div><br>
                            <div class="col-lg-12">
                                <input type="text" name="quiztime" class="form-control" value="<?php echo $row['quiz_time']; ?>">
                            </div><br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updatequiz" class="btn btn-primary">Update Quiz</button>
                        </div>

            </div>

        <?php } ?>

        </div>
    </div>
    </form>


</div>

<script>
    /* window.location.href = "quiz.php?id=<?php echo $cid ?>";*/
</script>