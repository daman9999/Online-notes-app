
<?php
    session_start();
if(!isset($_SESSION['user_id'])){
    header('location: index.php');
}
include('connection.php');
$user_id = $_SESSION['user_id'];

$sql="select * from users where user_id='$user_id'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
if($count==1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $username=$row['username'];
    $email = $row['email'];
    $pass=$row['password'];

}else{
    echo "error";
}

?>





<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styling.css">
        <title>Profile</title>
        <style>
            #container{
                margin-top: 180px;
            }

            #notepad,#AllNotes,#Done{
                display: none;
            }

            .button{
                margin-bottom: 20px;
            }

            textarea{
                width: 100%;
                max-width: 100%;
                font-size: 15px;
                line-height: 1.5em;
                border-left-width: 20px;
                border-color: #CA3009;
                padding: 10px;
            }
            tr{
                cursor :pointer;
            }

            .footer{
                text-align: center;
                position: fixed;
                bottom: 0;
                width:100%;
                padding:10px;
                margin-top:70px;
                height:40px;
                background: #F0F0F0;
            }

        </style>
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
                        <li>
                            <a class="nav-link" href="#">Profile </a>

                        </li>

                        <li class="nav-item active"><a class="nav-link " href="mainpageloggedin.php">Mynotes </a>
                        </li>


                    </ul>
                    <ul class = "nav navbar-nav ml-auto">
                        <li>
                            <a class="nav-link" href="#" ><strong>
                                Logged in as <?php echo $username;?>
                                </strong> </a>
                        </li>

                        <li>
                            <a class="nav-link" href="#" > Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------->
        <!--- container -->
        <div class="container"  id="container">
            <div class="row">
                <div class="offset-md-1 col-md-9">
                <h1 style="color:orange;margin-bottom:60px;">General Account Settings:</h1>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-dark ">
                        <tr data-target="#updateusername" data-toggle="modal">
                            <td>Username</td>
                            <td><?php
                                echo $username;
                                ?></td>
                        </tr>

                        <tr data-target="#updateemail" data-toggle="modal">
                            <td>Email</td>
                            <td>
                                <?php
                                echo $email;
                                ?>


                            </td>
                        </tr>


                        <tr data-target="#updatepassword" data-toggle="modal">
                            <td>Password</td>
                            <td style="font-size:10px;"><?php
                                echo $pass;
                                ?>

                            </td>
                        </tr>

                    </table>

                </div>
                </div>
            </div>

        </div>


<!--------------  update user name----------------->

        <form action="POST" id="updateusernameform">
            <div class="modal" id="updateusername" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!----login message-->
                            <div id="updateusernamemessage">

                            </div>
                            <!--- login mail---->

                            <div class="form-group">
                                <label for="username"></label>
                                <input class="form-control" type="text" name="username" maxlength="30" id="username" value="<?php echo $username?>">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-sm " type="submit" name="updateusername" value="submit" style="background: rgb(45,152,69);color: white;">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>


                        </div>
                    </div>
                </div>
            </div>




        </form>


<!--------------  update user name----------------->






<!--- update email------------->


        <form action="POST" id="updateuseremailform">
            <div class="modal" id="updateemail" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!----login message-->
                            <div id="updateemailmessage">

                            </div>
                            <!--- login mail---->

                            <div class="form-group">
                                <label for="email"></label>
                                <input class="form-control" type="email" name="email" maxlength="60" id="updateemailfield" value="<?php echo $email?>">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-sm " name="login" value="submit" style="background: rgb(45,152,69);color: white;">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>


                        </div>
                    </div>
                </div>
            </div>




        </form>
<!--- update email------------->

<!---------update password----------->




<!----- sign up form ---->
<form action="POST" id="updatepasswordform">
<div class="modal" id="updatepassword" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Change your password </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<!----updatepasswordmessage message-->
    <div id="updatepasswordmessage">

</div>




<!-- current password-->
<div class="form-group">
<label class="sr-only" for="currentpassword"></label>
<input class="form-control" type="password" name="currentpassword" placeholder="current password " maxlength="50" id="currentpassword">
</div>


<!-- choose a password-->
<div class="form-group">
<label class="sr-only" for="password"></label>
<input class="form-control" type="password" name="password" placeholder="choose password " maxlength="50" id="choosepassword">
</div>

<!---------  ----------->

<div class="form-group">
<label class="sr-only" for="password2"></label>
<input class="form-control" type="password" name="password2" placeholder="choose password " maxlength="50" id="confirmpassword">
</div>




<!------------------->






                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-sm" name="updatepassword" value="update password" style="background: rgb(45,152,69);color: white;">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




        </form>




<!---------update password----------->


        <!--        footer-->
        <div class="footer">
            <div class="container">
                <h3 >
                    Rights reserved by &copy; 2020-
                    <?php echo date("Y"); ?>.
                </h3>
            </div>
        </div>

        <!--- footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="profile.js"></script>
    </body>
</html>

