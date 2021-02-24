<?php
$databaseName='mynotest_onlinenotes';
// Connect to MySQL  (server,username,password ,[database name]=>later)
$link=mysqli_connect("localhost","root","");

        if(mysqli_connect_error())
        {
        die("error".mysqli_connect_error());
        }
// Make my_db the current database
$db_selected = mysqli_select_db($link,$databaseName);
echo $db_selected;
if (!$db_selected)
    {
    $sql = "CREATE DATABASE $databaseName;";
    // If we couldn't, then it either doesn't exist, or we can't see it. mynotest_onlinenotes';
    if (mysqli_query($link,$sql))
        {
        //database create successfully
        mysqli_close($link);
        $link=mysqli_connect("localhost","root","",$databaseName);
            $sql='CREATE TABLE forgotpassword(
            id int(11) AUTO_INCREMENT PRIMARY KEY,
            user_id int(11),
            rkey char(32),
            time int(11),
            status varchar(7)
            ) ;';
            $sql.='CREATE TABLE notes(
            id int(4) AUTO_INCREMENT PRIMARY KEY,
            user_id int(11),
            note text,
            time int(11)
            ); ';
            $sql.='CREATE TABLE rememberme(
            id int(11) AUTO_INCREMENT PRIMARY KEY,
            user_id int(11),
            authenticator1  char(64),
            f2authenticator2    char(64),
            expires    datetime
            ); ';
            $sql.='CREATE TABLE users(
            user_id int(11) AUTO_INCREMENT PRIMARY KEY,
            username varchar(30),
            email varchar(50),
            password varchar(64),
            activation  char(64),
            activation2    char(64)
            ); ';

            if (mysqli_multi_query($link,$sql)) {
                echo " tables created successfully\n";


            }
            else{
                echo "error";
            }

        }

    mysqli_close($link);
    }


?>

