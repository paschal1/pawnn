<?php
session_start();


if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('location:../pages/user_login_page.php');
    exit();
}
//db connection goes here -->
include('database_connect.php');
//include functions here.. 
include('functions.php');
//error_reporting(1);

// background page comes in
//include("index_background.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" class="img-fluid" href="epsimage/icon.PNG">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <title>eps||post||now</title>
    <script>
    setInterval(
        function() {
            $('#content').load('index.php');
        }, 500);
    </script>

</head>

<body>

    <div id="content" class="container"> please wait...</div>

</body>

</html>