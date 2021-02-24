//Ajax Call for the sign up form
//Once the form is submitted
$(document).on('submit', '#signupform', function(event){
    //prevent default php processing
    //event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//        console.log(datatopost);
    ;
    //send them to signup.php using AJAX
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        error: function(){
            console.log("run");
            $("#signupmessage").html('<div class="alert alert-danger" >There was an error with the Ajax Call. Please try again later.</div>');

        }
    });
    event.preventDefault();
});

///login form
$(document).on('submit', '#loginform', function(event){
    //prevent default php processing
    //event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
     // console.log(datatopost);
    //send them to signup.php using AJAX



    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location="mainpageloggedin.php";
            }else{
                $("#loginmessage").html(data);

            }
        },
        error: function(){
            console.log("run");
            $("#signupmessage").html('<div class="alert alert-danger" >There was an error with the Ajax Call. Please try again later.</div>');

        }
    });
    event.preventDefault();
});

//forgot code
$(document).on('submit', '#forgotpasswordform', function(event){
    console.log("admin");
    //prevent default php processing
    //event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
    // console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "forgotpassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location="mainpageloggedin.php";
            }else{
                $("#forgotmessage").html(data);

            }
        },
        error: function(){
            console.log("run");
            $("#signupmessage").html('<div class="alert alert-danger" >There was an error with the Ajax Call. Please try again later.</div>');

        }
    });
    event.preventDefault();
});

