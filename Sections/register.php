<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get started</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--=======fontawesome css========-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!--=======styles css========-->
    <link rel="stylesheet" href="../css/styles.css">
    <style>

    </style>
</head>

<body>
    <main>
        <div class=" main-area container bg-light pt-4 " >

            <div class="login-area  container-fluid" style="height: 230px;">
                <div class="text-area">

                    <p class="">
                    <h3 class="text-uppercase ">Sign up</h3>
                    <span class="pt-3 ">Want to sign up fill out this form.</span><br>
                    <font class="text-danger" align="center"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?></font>
                    </p>

                </div>
                <br>

                <div class="input-area container-fluid">
                    <div class="row ">


                        <div class=" col-lg-4 ">
                            <div class="image">

                                <figure class="snip0019">
                                    <img src="../images/student.jpg" alt="sample11" / ">
                                                    
                                                    <figcaption>
                                                    
                                                    <div>
                                                        <p class=" text-uppercase">
                                    build your career with moon.
                                    </p>
                            </div>
                            </figcaption>

                            </figure>
                        </div>
                    </div>

                    <div class=" col-lg-8  ">

                        <form action="../Includes/reg.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fname">FName</label>
                                    <input type="text" class="form-control" name="fname" id="exampleInputName">
                                </div>
                                <div class="col-lg-6">
                                    <label for="lname">LName</label>
                                    <input type="text" class="form-control" name="lname" id="exampleInputName">
                                </div>
                            </div>
                            <label for="dob">DoB</label>
                            <input type="date" class="form-control" name="dob" id="exampleInputName">



                            <div class="row">
                                <div class="col-lg-6">

                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                </div>
                            </div>

                            <br>


                            <!-- 
                                &nbsp; &nbsp; &nbsp; <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">I accept all the terms.</label>


                            -->
                            <button type="submit" class="btn  button-primary  mt-2" name="submit">Sign up</button>
                            <p class="mt-1" style="font-size: 0.8rem;">Already have an account <a href="login.php">login</a></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>




        </div>
    </main>





    <!-- ======= bootstrap jquery script======== -->
    <script src="./js/jquery.3.5.1.js"></script>
    <!-- bootstrap js -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- =======js script======== -->
    <script src="./js/script.js"></script>

</body>

</html>