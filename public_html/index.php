<?php

include('connection2.php');

include('connection.php');

//logout
include('logout.php');

//remember me
include('rememberme.php');

?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
        <!---- LINK THE STYLE SHEET----->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Bootstrap CSS -->

        <title>Online Notes App</title>
        <!-- AJAX CONNECTION-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet"  href="styling.css">
    </head>
    <body>

<!--------  Navigation Bar---------->




        <nav class="navbar navbar-custom navbar-expand-lg fixed-top navbar-light bg-light">

            <div class="container-fluid">
                                    <div class="navbar-header">
                                                    <a class="navbar-brand" href="#">
                                                        Online Notes App
                                                    </a>
                                    </div>

                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                                        aria-label="Toggle navigation">

                                                         <span class="navbar-toggler-icon ml-auto"></span>
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                        </button>


                                    <div class="collapse navbar-collapse" id="navbarNav">
                                                                    <ul class="nav navbar-nav">
                                                                        <li class="nav-item active">
                                                                            <a class="nav-link" href="#">Home </a>

                                                                        </li>
                                                                        <li>
                                                                            <a class="nav-link" href="#">Help </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="nav-link" href="#"> Contact us</a>
                                                                        </li>
                                                                    </ul>
                                                                   <ul class = "nav navbar-nav ml-auto">
                                                                            <li>
                                                                                <a class="nav-link" href="#loginmodal" data-toggle="modal"> Login</a>
                                                                            </li>
                                                                    </ul>
                                    </div>





            </div>

        </nav>

<!-------------------->
<!--- jumbotron -->
<div class="jumbotron" id="myContainer" >

    <h1 id="main-content-head">Online Notes App</h1>
    <p id="main-content-para">Save and Create notes for free!!</p>
    <button class=" btn-s btn btn-lg  btn-primary btn-success" href="#" data-target="#signupmodel" data-toggle="modal">Sign up it's free</button>
</div>

<div class="footer">
    <div class="container">
        <h3 >
            Rights reserved by &copy; 2020-
            <?php echo date("Y"); ?>.
        </h3>
    </div>
</div>

<!--- jumbotron -->


        <!----- sign up form ---->
        <form action="" id="signupform" method="POST">
            <div class="modal" id="signupmodel" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Sign up today and strt using notes app</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                              <!----sign up message-->
                              <div id="signupmessage">

                              </div>

                              <!--username-->
                              <div class="form-group">
                               <label class="sr-only" for="username"></label>
                                <input class="form-control" type="text" name="username" placeholder="username" maxlength="30" id="username">
                            </div>

                            <!--email-->
                            <div class="form-group">
                                <label class="sr-only" for="email"></label>
                                <input class="form-control" type="text" name="email" placeholder="email" maxlength="50" id="email">
                            </div>


                            <!--password-->
                            <div class="form-group">
                                <label class="sr-only" for="password"></label>
                                <input class="form-control" type="password" name="password" placeholder="choose a password" maxlength="50" id="password">
                            </div>


                            <!--password2-->
                            <div class="form-group">
                                <label class="sr-only" for="password2"></label>
                                <input class="form-control" type="password" name="password2" placeholder="confirm a password" maxlength="50" id="password2">
                            </div>




                        </div>
                        <div class="modal-footer">
                            <input class="btn green" name="signup" type="submit" value="Sign up" style="background: rgb(45,152,69);color: white;">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




        </form>



        <!------ login -------->


        <form action="" id="loginform" method="POST">
            <div class="modal" id="loginmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Login in website</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!----login message-->
                            <div id="loginmessage">

                            </div>
                            <!--- login mail---->

                            <div class="form-group">
                                <label class="sr-only" for="loginemail"></label>
                                <input class="form-control" type="text" name="loginemail" placeholder="email" maxlength="50" id="loginemail">
                            </div>

                            <!--password-->
                            <div class="form-group">
                                <label class="sr-only" for="loginpassword"></label>
                                <input class="form-control" type="password" name="loginpassword" placeholder="password" maxlength="50" id="loginpassword">
                            </div>

                            <div class="checkbox">
                                <label >
                                    <input type="checkbox" name="rememberme" id="rememberme">
                                 &nbsp;Remember me
                                </label>

                                <a class="float-right" href="#forgotpasswordform" style="cursor:pointer;" data-dismiss="modal" data-target="#forgotpasswordmodal" data-toggle="modal"> Forgot Password? </a>



                            </div>



                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm mr-auto" data-dismiss="modal" data-target="#signupmodel" data-toggle="modal">Register</button>
                           <input class="btn green" name="login" type="submit" value="log in" style="background: rgb(45,152,69);color: white;">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>


                        </div>
                    </div>
                </div>
            </div>




        </form>






        <!------ forgotpassword -------->




        <form action="" id="forgotpasswordform" method="POST">
            <div class="modal" id="forgotpasswordmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Forgot Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
<!--                            --forgotpassword message-->
                            <div id="forgotmessage">

                            </div>
<!--               forgot password mail---->

                            <div class="form-group">
                                <label class="sr-only" for="forgotpasswordmail"></label>
                                <input class="form-control" type="text" name="forgotpasswordmail" placeholder="email" maxlength="50" id="forgotpasswordmail">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm mr-auto" data-dismiss="modal" data-target="#signupmodel" data-toggle="modal">Register</button>

                            <input type="submit" class="btn btn-sm" name="forgot password" value="submit" style="background: rgb(45,152,69);color: white;">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>


                        </div>
                    </div>
                </div>
            </div>




        </form>




        <!------ modal -------->



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="javascript.js"></script>
    </body>


</html>






