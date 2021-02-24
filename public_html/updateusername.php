<?php
session_start();
include('connection.php');
$id = $_SESSION['user_id'];
$username = $_POST['username'];

$sql = "UPDATE users SET username='$username' where user_id='$id'";
$result= mysqli_query($link , $sql) ;
if(!$result){
    echo '<div class="alert alert-danger">There was an error in  update the query.</div>'; exit;

}

?>
