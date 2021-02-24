<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: index.php');
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
        <title>My notes</title>
        <style>
            #container{
                margin-top: 120px;
            }

            #notepad,#AllNotes,#Done,.delete{
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
            .noteheader{
                border:1px solid grey;
                border-radius: 8px;
                background: rgb(233,229,232);
                padding:0px 20px;
                margin-bottom: 12px;

            }
            .text{
                font-size: 40px;
                overflow:hidden;
                white-space: nowrap;
                text-overflow: ellipsis;

            }
            .time-text{
                overflow:hidden;
                white-space: nowrap;
                text-overflow: ellipsis;

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
                            <a class="nav-link" href="profile.php">Profile </a>

                        </li>

                        <li class="nav-item active"><a class="nav-link " href="mainpageloggedin.php">Mynotes </a>
                        </li>




                    </ul>
                    <ul class = "nav navbar-nav ml-auto">
                        <li>
                            <a class="nav-link" href="#" ><strong>
                                Logged in as <?php echo strtoupper($_SESSION['username'])?>
                            </strong> </a>
                        </li>

                           <li>
                            <a class="nav-link" href="index.php?logout=1" > Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-------------------->
        <!--- container -->
        <div class="container"  id="container">
           <!---- collapseable----->
            <div class="alert alert-danger collapse">
                <a class="close" data-dismiss="alert">
                    &times;
                </a>
                <p id ="alertcontent"></p>
            </div>
            <div class="row">
                <div class="offset-md-1 col-md-9">


               <div class="button">
                <button  id="addNote" type="button" class="btn btn-success">Add note</button>

                <button id="edit" type="button" class="btn btn-success float-right">edit</button>
                <button id="Done" type="button" class="btn btn-success float-right">done</button>
                <button id="AllNotes" type="button" class="btn btn-success">All notes</button>
            </div>
                    <div id="notepad">
                    <textarea rows="10"></textarea>
                    </div>
                    <div id="notes" class="notes">

                    </div>
                </div>

                </div>

        </div>


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
        <script src="mynotes.js"> </script>
    </body>
</html>

