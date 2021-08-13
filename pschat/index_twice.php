<?php
session_start();


// if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
//     header('location:../pages/user_login_page.php');
//     exit();
// }
//db connection goes here -->
include('database_connect.php');
//include functions here.. 
include('functions.php');
//error_reporting(1);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eps||Pawn</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img class="rounded-circle" src="img/EPS logo ColouredSVG.svg" alt="...user" width="80px">
                </div>
                <div class="sidebar-brand-text mx-3">Pawn<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                EPS-PAWN
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>POST</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Components:</h6>
                        <a class="collapse-item" href="buttons.html">Add Post</a>
                        <a class="collapse-item active" href="cards.html">View Post</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Settings:</h6>
                        <a class="collapse-item" href="utilities-color.html">Profile</a>
                        <a class="collapse-item" href="utilities-border.html">Dark mode</a>
                        <a class="collapse-item" href="utilities-animation.html">Delete Post</a>
                        <a class="collapse-item" href="utilities-other.html">Others</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Explore
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">Chats</a>
                        <a class="collapse-item" href="blank.html">Members</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span> Authorise Sales/Buyers</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Goods Area</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow"
                    style="background-color: rgb(245, 113, 4);">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <?php
                                                
                                                $query = "SELECT * FROM users WHERE user_id = '".$_SESSION['id']."'";
                                                $statement = $dbconn->prepare($query);
                                                $statement->execute();
                                                $res = $statement->fetchAll();
                                                
                                                foreach ( $res as $fetch_pic ) {

                                                
                                                $fn = $fetch_pic ['firstname'];
                                                $ln = $fetch_pic ['lastname'];
                                                $name = '';

                                                $query = "SELECT * FROM user_profile_pic WHERE user_id = '".$_SESSION['id']."' ORDER BY timeCreated LIMIT 1";
                                                $statement = $dbconn->prepare($query);
                                                $statement->execute();
                                                $rest = $statement->fetchAll();

                                                foreach ( $rest as $fetch_pics ) {
                                                $img = $fetch_pics ['image'];
                                                ?>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-light-600 small"
                                    style="color: cornsilk;"><?php $name .= ''.$fn.' '.$ln.'';?><?php echo $name ;?></span>
                                <img class="img-profile rounded-circle" src="../uploads/profile/<?php echo $img ;?>">
                            </a>
                            <?Php }}?>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <?php

            $query = "SELECT * FROM user_post WHERE priority ='public' ORDER BY post_id DESC LIMIT 40";
            $statement = $dbconn->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $count = $dbconn->query('SELECT * FROM user_post');
            $num = $count->rowCount();
            foreach ($result as $loop_key => $rows){
            $userid = $rows['user_id'];
            $post_id = $rows['post_id'];




             $query2 = "SELECT  *FROM user_profile_pic  WHERE user_id='$userid' ORDER BY timeCreated DESC";
                $statement = $dbconn->prepare( $query2 );
                $statement ->execute();
                $result2 = $statement->fetchAll();
                foreach ( $result2 as $loop_key => $fetch_user_pic ) {

                     $image = $fetch_user_pic ['image'];
                     
        $query1="SELECT * FROM users WHERE $userid = user_id";
        // $query1="SELECT users.firstname, users.middlename, users.lastname, user_profile_pic.image FROM users, user_profile_pic WHERE $userid = users.user_id=user_profile_pic.user_id ORDER BY user_profile_pic.timeCreated"; 
        $statement = $dbconn->prepare($query1);
        $statement->execute();
        $result1 = $statement->fetchAll();
        foreach($result1 as $loop_key => $row){


        
        $user_name = $row['firstname'];
       $user_name2 =$row['middlename'];
       $user_name3 =$row['lastname'];
       $output ='';

    

               

           ?>




                    <div class="col d-flex justify-content-center">


                        <div class="card border-none mb-3 center" style="max-width: 30rem;">

                            <div class="card-body text-success">
                                <?php if ($fetch_user_pic['image'] != "") : ?> <span>
                                    <img src="../uploads/profile/<?php echo $image; ?> "
                                        class="img-profile rounded-circle" height="40px" width="40px"
                                        class="img-circle" />
                                </span>
                                <?php else : ?>
                                <img src="img/user.jpeg" height="40px" width="100%" class="img-profile rounded-circle"
                                    id="profileDisplay" onclick="triggerClick()" />
                                <?php endif; ?>
                                <?php $output .= '<span><button type="button" class="view_user" id="' . $rows['user_id'] . '" style="border:none; background-color:white;">' . $user_name . '  ' . $user_name2 . '  ' . $user_name3 . '</button></span>'; ?>
                                <?php echo $output; ?>
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <?php if ($rows['post_pic'] != "") : ?>
                                            <img src="../uploads/<?php echo $rows['post_pic']; ?>" class="img-thumbnail"
                                                width="100%" height="100%" />

                                            <?php else : ?>
                                            <img src="../uploads/default.jpg" width="100%" height="200px"
                                                class="img-thumbnail" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">

                                                <p class="card-title">


                                                </p>
                                                <p class="card-text"><?php echo $rows[2]; ?></p>
                                                <p class="card-text"><small
                                                        class="text-muted"><?php echo $rows[4] . ' Item in Stock'; ?></small>
                                                    <span>&#8358;<?php echo $rows[3];?>


                                                        <form method="post">
                                                            <span> <a
                                                                    href="user_post_details.php?post_id=<?php echo $post_id; ?>"><button
                                                                        type="button"
                                                                        class="btn btn-warning btn-xs edit"
                                                                        id="<?php echo $row[1]; ?>">Order</button></a><br>
                                                        </form>

                                                        <!-- this is one of the form causing the issue with this form send message to user who
                                    post i want the page note to reload when submit button is clicked -->


                                                </p>
                                                <form method="post" action=""
                                                    data-sendmessage-form-id="<?php echo $loop_key; ?>">
                                                    <input type="hidden" name="to_user_id" display="none"
                                                        value="<?php echo $user_id;?>">

                                                    <input type="hidden" name="from_user_id" display="none"
                                                        value="<?php echo $from_user_id;?>">
                                                    <input type="hidden" name="chat_message" display="none"
                                                        value="Is this Available">
                                                    <button type="submit" name="send_message"
                                                        class="btn btn-success btn-round pull-right submit"
                                                        data-toggle="modal" data-target="#myModal">
                                                        <i class="now-ui-icons shopping_cart-simple"></i>Send
                                                        Message</button>
                                                </form>
                                                <!-- here you should either choose to submit call a modal here or submit this form
                                             or do both programmatically from a function -->
                                                <!-- i set it to calling the modal -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment box goes here -->


                                <button type="button" placeholder="" style="border:none; background-color:white; "
                                    id="comment2" width=15%>
                                    <?php if ($fetch_user_pic['image'] != "") : ?>
                                    <img src="../uploads/profile/<?php echo $image; ?>"
                                        class="img-profile rounded-circle" height="20px" width="20px"
                                        border-radius="50px" />
                                    <?php else : ?>
                                    <img src="img/user.jpeg" style=" height:20; width:20; border-radius:50px;" />
                                    <?php endif; ?>

                                    Drop your comment...</button>
                                <!-- // here goes the comment for
                                    m -->
                                <!-- this is one of the form causing the issue with this form send comment to user who
                                    post i want the page note to reload when submit button is clicked -->
                                <form method="post" action="add_comment.php" class="form-group"
                                    data-comment-form-id="<?php echo $loop_key; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $userid; ?>">
                                    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                                    <div class="form-group">
                                        <textarea class="form-input" type="text" style="border:none;"
                                            placeholder="comment here..." name="comment_txt" id="comment" row="2"
                                            col="3" value=""></textarea>
                                        <input type="submit" class="btn default submit" value="Send" title="submit"
                                            name="comment" src="img/sendtext.PNG" alt="Send" width=30px height=22px />
                                        <i class="bi bi-cursor"></i>
                                </form>
                                <?php
                                                
                                                $query = "SELECT cmt.id AS comment_id, ux.firstname, ux.middlename, ux.lastname AS commenter_name, cmt.message AS comment, cmt.created_at AS timeCreated FROM user_post_comment AS cmt INNER JOIN users AS ux ON cmt user_id = ux.id WHERE cmt.post_id = post_id";
                                                //$query = "SELECT * FROM user_post_comment WHERE post_id=$post_id ORDER BY comment_id";
                                                $statement = $dbconn->prepare($query);
                                                $statement->execute();
                                                $result4 = $statement->fetchAll();
                                                $count = $statement->rowCount();
                                                ?>

                                <span> &nbsp; <input type="button" value="Comment(<?php echo $count; ?>)"
                                        style="background:#FFFFFF; border:#FFFFFF;font-size:15px; color:#6D84C4;"
                                        onClick="Comment_focus(<?php echo $post_id; ?>);"
                                        onMouseOver="Comment_underLine(<?php echo $post_id; ?>)"
                                        onMouseOut="Comment_NounderLine(<?php echo $post_id; ?>)"
                                        id="comment<?php echo $post_id; ?>">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span style="color:#999999;"> </span>
                                </span>
                            </div>

                            <?php
                                            foreach ($result4 as $comment_data) {
                                                $comment_id = $comment_data[0];
                                                $comment_user_id = $comment_data[1];
                                                $user_n1 = $comment_data['firstname'];
                                                $user_n2 =$comment_data['middlename']; 
                                                $user_n3 = $comment_data['lastname'];
                            ?>
                            <?php
                                                $clen = strlen($comment_data[3]);
                                                if ($clen > 0 && $clen <= 60) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                ?>
                            <tr>
                                <td> </td>
                                <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                    <!-- <img src="../uploads/profile/<?php //echo $image; ?> " height="20px" width="20px"
                                        border-radius="50px" /> -->
                                    <?php echo '<b>' . $user_n1 . '</b>'; ?>
                                    <?php echo '<b>' . $user_n2 . '</b>'; ?>
                                    <?php echo '<b>' . $user_n3 . '</b>'; ?>
                                    <?php echo $cline1; ?>
                                </td>
                            </tr>
                            <?php
                                                } else if ($clen > 60 && $clen <= 120) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                                    $cline2 = substr($comment_data[3], 60, 60);
                                ?>
                            <tr>
                                <td> </td>
                                <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                    <?php echo $cline1; ?></td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td bgcolor="#EDEFF4"> </td>
                                <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                    <?php echo $cline2; ?></td>
                            </tr>
                            <?php
                                                } else if ($clen > 120 && $clen <= 180) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                                    $cline2 = substr($comment_data[3], 60, 60);
                                                    $cline3 = substr($comment_data[3], 120, 60);
                                ?>
                            <tr>
                                <td> </td>
                                <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                    <?php echo $cline1; ?></td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td bgcolor="#EDEFF4"> </td>
                                <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                    <?php echo $cline2; ?></td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td bgcolor="#EDEFF4"> </td>
                                <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                    <?php echo $cline3; ?></td>
                            </tr>
                            <?php
                                                } else if ($clen > 180 && $clen <= 240) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                                    $cline2 = substr($comment_data[3], 60, 60);
                                                    $cline3 = substr($comment_data[3], 120, 60);
                                                    $cline4 = substr($comment_data[3], 180, 60);
                                ?>
                            <table>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline1; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline2; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline3; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline4; ?>
                                    </td>
                                </tr>
                                <?php
                                                } else if ($clen > 240 && $clen <= 300) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                                    $cline2 = substr($comment_data[3], 60, 60);
                                                    $cline3 = substr($comment_data[3], 120, 60);
                                                    $cline4 = substr($comment_data[3], 180, 60);
                                                    $cline5 = substr($comment_data[3], 240, 60);
                                    ?>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline1; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline2; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline3; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline4; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline5; ?>
                                    </td>
                                </tr>
                                <?php
                                                } else if ($clen > 300 && $clen <= 360) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                                    $cline2 = substr($comment_data[3], 60, 60);
                                                    $cline3 = substr($comment_data[3], 120, 60);
                                                    $cline4 = substr($comment_data[3], 180, 60);
                                                    $cline5 = substr($comment_data[3], 240, 60);
                                                    $cline6 = substr($comment_data[3], 300, 60);
                                    ?>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline1; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline2; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline3; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline4; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline5; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline6; ?>
                                    </td>
                                </tr>
                                <?php
                                                } else if ($clen > 360 && $clen <= 420) {
                                                    $cline1 = substr($comment_data[3], 0, 60);
                                                    $cline2 = substr($comment_data[3], 60, 60);
                                                    $cline3 = substr($comment_data[3], 120, 60);
                                                    $cline4 = substr($comment_data[3], 180, 60);
                                                    $cline5 = substr($comment_data[3], 240, 60);
                                                    $cline6 = substr($comment_data[3], 300, 60);
                                                    $cline7 = substr($comment_data[3], 360, 60);
                                    ?>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline1; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline2; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline3; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline4; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline5; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline6; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td bgcolor="#EDEFF4"> </td>
                                    <td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">
                                        <?php echo $cline7; ?>
                                    </td>
                                </tr>
                            </table>
                            <?php
                               }       }
                                ?>
                        </div>

                    </div>

                </div>





                <!-- </div> -->

                <?php

        }
        }
    }
        ?>


                <!-- // <div class="img-fluid loader"> -->
                <!-- image loader -->
                <!-- <img src="img/loader.gif" class="img-fluid" width=100%>
    </div>
    <div class="msg"></div> -->


                </section>
                <script src="Profile_js/pagination.js"></script>
                <script src="js/jquery.min.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Eps Pawn 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>