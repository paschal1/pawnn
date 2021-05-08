<?php
session_start();

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location:../pages/user_login_page.php');
    exit();
}
include('../database_connect.php');
if(isset($_SESSION['id'])){

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script type="text/javascript" src="fb_files/fb_index_file/fb_js_file/Registration_validation.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
    .form-div{
        margin-top:100px;
        border: 1px solid #e0e0e0;
        padding-top:15px;
    }
    #profileDisplay{
        display: block;
        width:160px;
        margin:10px auto;
        border-radius:50%;
    }
    .control{
        position:absolute; left:45.5%; top:44%;
        padding-bottom:12px;
    }
    .text-center{
        padding-bottom:20px;  
    }
    hr{
        color:grey;
        width:100%;
    }

    
  @media (max-width: 900px){
   .fa{
   		font-size: 20px;
   		padding: 10px;
   }
  }


  @media (max-width: 600px){
  	.carousel-caption{
  		display: none;
  	}
  	#icon{
  		max-width: 150px;
  	}
  	h4{
  		font-size: 1.7em;
  	}

  }
    </style>
</head>
<body>


<?php
$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE user_id='$id'";
$statement = $dbconn->prepare($query);
$statement ->execute();
$result = $statement->fetchAll();
    $output = "";
    foreach($result as $row){
        $userid = $row['user_id'];


$query1 = "SELECT * FROM user_profile_pic WHERE user_id='$userid'";
$statement = $dbconn->prepare($query1);
$statement ->execute();
$result1 = $statement->fetchAll();

foreach($result1 as $rows){
        $f = $row['firstname'];
        $m = $row['middlename'];
        $l = $row['lastname'];
       
$output .='

<div class="alert">

</div>

<div style="position:absolute; left:45%; top:10%; ">
<img src="../../uploads/profile/'.$rows['image'].'" class="img-circle" style=" height:60; width:60;  border:1px;" id="profileDisplay" onclick="triggerClick()"/> 
</div>
<div style="position:absolute; left:45%; top:15%;"class="form-group">
<input type="file" id="profileImage" onchange="displayImage(this)" name="profile_image" style="display: none;">

</div>
<div style="position:absolute; left:44.5%; top:34%; " id="upload" class="form-group">	
        <p><b>'.$l.'  '.$m.' '.$f.'</b></p>	
        <hr>
   

</div> 

    <div class="control">
    <div class="text-center"><b>Manage your Account </b></div>
    <div class="text-center">Notifications & Sounds</div>
    <div class="text-center"><a href="user_settings.php">change profile picture </a></div>
    <div class="text-center"><a href="../chat.php">Partners</a></div>
    <div class="text-center">Add Friends</div>
    <div class="text-center"><a href="../pawn_profile.php">Delete Post</a></div>
    <div class="text-center"><a href="delete_account.php">Delete Account</a></div>
    <div class="text-center">Report a Problem</div>
    <div class="text-center">Help</div>
    <div class="text-center">Legal and Policies</div>
    <a class="btn btn-default btn-round" href="../post_index.php"><i class="now-ui-icons arrows-1_minimal-left"></i> &nbsp Back to index</a>
</div>

';
}
    }
    echo $output;

?>


<script src="script.js"></script>
</body>
</html>
<?php
}
?>