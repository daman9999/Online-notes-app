<?php
session_start();
include('connection.php');
//get the user id
$user_id=$_SESSION['user_id'];
///delete the empty notes
$sql="delete from notes where note='' ";

$result=mysqli_query($link,$sql);

if(!$result){
    echo '<div class="alert alert-warning">
    error running the code.
</div>';
}
$sql="select * from notes where user_id='$user_id' order by time desc";

//shows notes or alert message
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $note_id = $row['id'];
            $note = $row['note'];
            $time = $row['time'];
            $time = date("F d, Y h:i:s A", $time);

            echo "
        <div class='note'>
            <div class='col-xs-6 col-sm-3 delete'>
                <button class='btn-lg btn-danger' style='width:100%;font-size: 100%;;float:left;'>delete</button>

            </div>
            <div class='noteheader' id='$note_id'>
                <div class='text'>$note</div>
                <div class='time-text'>$time</div>
            </div>
        </div>";
        }
    }else{
        echo '<div class="alert alert-warning">You have not created any notes yet!</div>'; exit;
    }

}else{
    echo '<div class="alert alert-warning">An error occured!</div>'; exit;
    //    echo "ERROR: Unable to excecute: $sql." . mysqli_error($link);
}

session_destroy();
?>

