<?php

include_once("../mheader.php");

?>



<div class="row ">

    <?php
    $cid = $_GET['id'];
    ?>

    <div class="col-lg-12 bg-white ">
        <h4>Course Quizzes</h4>
    </div>
</div>
<div class="row mt-4 bg-light ">
    <div class="col-lg-5 pt-2 bg-white">
        <div class="card ">
            <div class="card-header">
                <h5 class="text-primary">Add Quiz</h5>
            </div>

            <div class="card-body">
                <form action="../Includes/add.php" method="post">
                    <div class="modal-body">

                        <div class="col-lg-12">
                            <input type="hidden" name="course_id" class="form-control" value="<?php echo $cid ?>">
                        </div><br>

                        <div class="col-lg-12">

                            <input type="text" name="quiztitle" class="form-control" placeholder="quiz title">
                        </div><br>
                        <div class="col-lg-12">
                            <input type="text" name="quiztime" class="form-control" placeholder="Time">
                        </div><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="addquiz" class="btn btn-primary">Add Quiz</button>
                    </div>

            </div>

        </div>
    </div>
    <div class="col-lg-6 ml-5 pt-2 bg-white">
        <div class="card ">
            <div class="card-header">
                <h5 class="text-primary">Manage Quizzes</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th class="text-left pl-4">#</th>
                                <th class="text-left ">Quiz Title</th>
                                <th class="text-left ">Time limit</th>
                                <th class="text-left">Edit</th>
                                <th class="text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            include_once('../includes/connect.php');


                            $res = mysqli_query($conn, "SELECT quiz.id as qid, quiz.course_id, quiz.quiz_title, quiz.quiz_time,
                            courses.id
                            from courses
                            inner join quiz on courses.id = quiz.course_id where quiz.course_id  = $cid
                        
                        ");

                            if (mysqli_num_rows($res)) {

                                while ($row = mysqli_fetch_assoc($res)) {

                            ?>

                                    <tr>
                                        <td> <?php echo $row['qid']; ?></td>
                                        <td> <?php echo $row['quiz_title']; ?></td>
                                        <td> <?php echo $row['quiz_time']; ?></td>
                                        <td> <a href="./managequiz.php?id=<?php echo $row['qid']; ?>"><button type="button" name="" class="btn btn-primary">Edit</button></a></td>
                                        <td>
                                            <input type="hidden" name="quizid" value="<?php echo $row['qid']; ?>">
                                            <button type="submit" name="deletequiz" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>


                        </tbody>
                <?php

                                }
                            } else {
                                echo '<div class="alert alert-danger mt-5 " style="font: size 1.2rem;">No Quizzes Posted</div>';
                            }
                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
    /* window.location.href = "quiz.php?id=<?php echo $cid ?>";*/
</script>