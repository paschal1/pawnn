<?php
session_start();
if(isset($_SESSION['id'])){
    include('../config/dbconn.php');

    $username= $_SESSION['username'];
    $id = $_SESSION['status_id'];

   $query= "UPDATE user_status SET status = now() WHERE status_id='$id'";
    $result =mysqli_query($dbconn,$query);
    //s`$rows = mysqli_fetch_array($result);

    
}
