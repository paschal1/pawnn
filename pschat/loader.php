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
include("index_background.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="epsimage/icon.png" type="image/png">
    <link rel="icon" type="image/png" class="img-fluid" href="epsimage/icon.PNG">
    <title>Epspawn</title>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <!-- jquery link -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- css links -->

    <link rel="stylesheet" href="css/loader.css">

    <!-- bootstrapcdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>
    <!-- form for posting goes here -->

    <!-- i want the page note to reload when submit button is clicked -->
    <form method="post" action="upload.php" enctype="multipart/form-data" name="post_pic" id="formdata">
        <div class="container">
            <label for="" class="form-group ">
                <textarea class="form-control" name="post_txt" placeholder="Add Product Description"
                    id="post_txt"></textarea>
            </label><br> <br>
            <label for="" class="form-group ">
                <input type="text" name="price" class="form-control" placeholder="Enter Price" id="p">
            </label>
            <label for="" class="form-group ">
                <input type="text" name="qty" class="form-control" placeholder="Enter Qty" id="q">
            </label><br> <br>
            <label for="" class="form-group ">
                <input type="hidden" name="post_time">
            </label>
            <label for="" class="form-group ">
                <select name="priority" class="form-control" id="priority">
                    <option value="Public">Public </option>
                    <option value="Private">Only me </option>
                </select>
            </label>
            <label for="" class="form-group ">
                <span><img src="img/download.JPEG" style=" height:20px; width:20px;" id="post_img"
                        onclick="triggerClick()" />Add Photo </span>
            </label>
            <label for="" class="form-group ">
                <input type="file" id="profileImage" id="postimage" onchange="displayImage(this)" name="post_pic"
                    style="display:none;" multiple>
            </label>
            <label for="" class="form-group ">
                <input class="btn btn btn-default submit" type="submit" value="Upload" name="file" id="profileImage"
                    onClick="time_get()" />
            </label>
        </div>
    </form>
    <div class="wrapper">
        <?php



                                //fetched first 4 data from db for pagination from user post
                                $query = ("SELECT * FROM user_post WHERE priority ='public' ORDER BY post_id DESC LIMIT 0, 4");
                                $statement = $dbconn->prepare($query);
                                $statement->execute();
                                $result = $statement->fetchAll();
                                $count = $dbconn->query('SELECT * FROM user_post');
                                $num = $count->rowCount();

                                ?>
        <?php echo '<span style="color:green;">Users have</span> ' . $num . ' <span style="color:green;">items to be sold in our website <p>Buy now or Add yours</p></span>'; ?>
        <?php
                                foreach ($result as $post_data) {

                                    $post_id = $post_data[0];
                                    $user_id = $post_data[1];
                                    $post_txt = $post_data[2];
                                    $post_img = $post_data[7];
                                    $post_price = $post_data[3];
                                    $qty = $post_data[4];

                                    
                                    // from users table
                                    $query = "SELECT * FROM users WHERE user_id= '$user_id'";
                                    $statement = $dbconn->prepare($query);
                                    $statement->execute();
                                    $result1 = $statement->fetchAll();
                                    foreach ($result1 as $fetch_user_info) {
                                        $users = $fetch_user_info['user_id'];
                                        $user_name = $fetch_user_info[1];
                                        $user_name2 = $fetch_user_info[2];
                                        $user_name3 = $fetch_user_info[3];
                                        $user_Email = $fetch_user_info[5];
                                        $user_gender = $fetch_user_info[10];
                                            $output = "";

                                            
                                         //from profile pic table
                                        $query = "SELECT  *FROM user_profile_pic  WHERE user_id='$users' ORDER BY timeCreated DESC";
                                        $statement = $dbconn->prepare($query);
                                        $statement->execute();
                                        $result2 = $statement->fetchAll();
                                        foreach ($result2 as $loop_key => $fetch_user_pic) {

                                            $user_pic = $fetch_user_pic[2];
                                            $user_pic1 = $fetch_user_pic[0];


?>
        <div class="wrapper">
            <div style="padding-top:4px; padding-bottom:7px;">
                <?php if ($user_pic != "") : ?>
                <span><img src="../uploads/profile/<?php echo $user_pic; ?> " height="40px" width="40px"
                        class="img-circle" /> </span>
                <?php else : ?>
                <img src="img/user.jpeg" height="40px" width="100%" class="img-circle" id="profileDisplay"
                    onclick="triggerClick()" />
                <?php endif; ?>
                <?php $output .= '<span><button type="button" class="view_user" id="' . $fetch_user_info['user_id'] . '" style="border:none; background-color:white;">' . $user_name . '  ' . $user_name2 . '  ' . $user_name3 . '</button></span>'; ?>
                <?php echo $output; ?>
            </div>

            <?php if ($post_img != "") : ?>
            <img src="../uploads/<?php echo $post_img; ?>" width="50%" height="10px" class="img-thumbnail" />

            <?php else : ?>
            <img src="../uploads/default.jpg" width="100%" height="200px" class="img-thumbnail" />
            <?php endif; ?>
            <p><?php echo $post_data[2]; ?></p>
            <p><?php echo $post_data[4] . ' Item in Stock'; ?></p>

            <span>&#8358;<?php echo $post_data[3]; $from_user_id = $_SESSION['id'];?>

            </span>
            <form method="post">
                <span> <a href="user_post_details.php?post_id=<?php echo $post_id; ?>"><button type="button"
                            class="btn btn-warning btn-xs edit" id="<?php echo $post_data[1]; ?>">Order</button></a>
            </form>
            <!-- this is one of the form causing the issue with this form send message to user who
                                    post i want the page note to reload when submit button is clicked -->
            <form method="post" action="" data-sendmessage-form-id="<?php echo $loop_key; ?>">
                <input type="hidden" name="to_user_id" display="none" value="<?php echo $user_id;?>">

                <input type="hidden" name="from_user_id" display="none" value="<?php echo $from_user_id;?>">
                <input type="hidden" name="chat_message" display="none" value="Is this Available">
                <button type="submit" name="send_message" class="btn btn-success btn-round pull-right submit"
                    data-toggle="modal" data-target="#myModal">
                    <i class="now-ui-icons shopping_cart-simple"></i>Send Message</button>
            </form>

            <!-- here you should either choose to submit call a modal here or submit this form
                                             or do both programmatically from a function -->
            <!-- i set it to calling the modal -->

            </span>



            <!-- comment box goes here -->


            <button type="button" placeholder="" style="border:none; background-color:white; " id="comment2" width=15%>
                <?php if ($user_pic != "") : ?>
                <img src="../uploads/profile/<?php echo $user_pic2; ?> " height="20px" width="20px"
                    border-radius="50px" />
                <?php else : ?>
                <img src="img/user.jpeg" style=" height:20; width:20; border-radius:50px;" />
                <?php endif; ?>

                Drop your comment...</button>
            <!-- // here goes the comment for
                                    m -->
            <!-- this is one of the form causing the issue with this form send comment to user who
                                    post i want the page note to reload when submit button is clicked -->
            <form method="post" action="" class="form-group" data-comment-form-id="<?php echo $loop_key; ?>">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                <div class="form-group">
                    <textarea class="form-input" type="text" style="border:none;" placeholder="comment here..."
                        name="comment_txt" id="comment" row="2" col="3" value=""></textarea>
                    <input type="submit" class="btn default submit" value="Send" title="submit" name="subcomment"
                        src="img/sendtext.PNG" alt="Send" width=30px height=22px />
                    <i class="bi bi-cursor"></i>
            </form>

        </div>
        <hr>

    </div>
    </div>
    <?php } } } ?>
</body>
<script>
function triggerClick() {
    document.querySelector('#profileImage').click();
}

function displayImage(e) {
    if (e.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.querySelector('#post_img').setAttribute('src', e.target.result);

        }
        reader.readAsDataURL(e.files[0]);
    }
}
</script>

</html>