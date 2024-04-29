<?php 
 session_start();
 $role = $_SESSION['role'];
 if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true && $role !== "admin"){
   header('Location: ../index.php');
 }
 
   include("../Assets/config/config.php");
 ?>
<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>LibraMind</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Assets/css/dataTables.bootstrap4.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../Assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../Assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../Assets/css/responsive.css">

       <link href="../Assets/css/sweetalert2.min.css "rel="stylesheet">
      <script src="../Assets/js/sweetalert2.all.min.js"></script>
      <script src="../Assets/js/jquery351.min.js"></script>
      
     
      <!-- jquery -->
   </head>
   <body>
      <!-- loader Start -->
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="dashboard.php" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Libramind</span>
                  </div>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                        <ul id="dashboard" class="active active-menu" data-parent="#iq-sidebar-toggle">
                           <li><a href="dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li>         
                           <li>
                              <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-book-line"></i><span>Library</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                 <li><a href="book_list.php"><i class="ri-book-2-line"></i>Books</a></li>
                                 <li><a href="capstone_thesis.php"><i class="ri-book-2-line"></i>Capstone/Thesis</a></li>
                                 <li><a href="borrow_books.php"><i class="ri-book-2-line"></i>Borrow Books</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                                 <li><a href="user_list.php"><i class="las la-th-list"></i>Student List</a></li>
                                  <li><a href="employee_list.php"><i class="las la-th-list"></i>Employee List</a></li>
                              </ul>
                           </li>
                            <li>
                              <a href="#report" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-archive"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="report" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                                 <li><a href=""><i class="las la-file"></i>Book List</a></li>
                                 <li><a href=""><i class="las la-file"></i>Attendance List</a></li>
                                 <li><a href=""><i class="las la-file"></i>User List</a></li>
                                 <li><a href=""><i class="las la-file"></i>Capstone/Thesis List</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#maintenance" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-cog"></i><span>Maintenance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="maintenance" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                                 <li><a href=""><i class="las la-file"></i>Manage Categories</a></li>
                                 <li><a href=""><i class="las la-file"></i>Manage TypeOfResearch</a></li>
                                 <li><a href=""><i class="las la-file"></i>Manage School Year</a></li>
                                 <li><a href=""><i class="las la-file"></i>Manage Course</a></li>
                                 <li><a href=""><i class="las la-file"></i>Manage Authors</a></li>
                                 <li><a href=""><i class="las la-file"></i>Manage Accounts</a></li>
                              </ul>
                           </li>
                           <li><a href="logout.php?logout=true"><i class="ri-book-line"></i>Log-out</a></li>
                        </ul>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         