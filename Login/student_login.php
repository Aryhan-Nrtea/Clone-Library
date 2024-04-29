
<?php 
    session_start();
    include ('../Assets/config/config.php');

// Check if the user is already logged in

?>

<!doctype html>
<html lang="en">
   
<!-- Mirrored from templates.iqonic.design/booksto/html/pages-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 08:44:07 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>KnowledgeVerse-EVSUCC Cheer UP Program</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../Assets/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../Assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../Assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../Assets/css/responsive.css">
      <link rel="stylesheet" href="../Assets/css/sweetalert2.min.css" >

   

      <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
            .h-custom {
            height: calc(100% - 73px);
            }
            @media (max-width: 450px) {
            .h-custom {
            height: 100%;
            }
        }
      </style>
   </head>
   <body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../Assets/images2/student.jpg"
          class="img-fluid" alt="Sample image" width="auto">
          <p class="lead fw-normal mb-0 me-3"><b>LibraMind</b></p>
           <p class=" fw-normal mb-0 me-3"> </p>
           <p class=" fw-normal mb-0 me-3"></p>
      </div>
      <!-- form student voucher for credentials -->
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <!-- end of the voucher form -->
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Student's Login</p>
          </div>

          <!-- Email input -->
          <form  method="post">
          <div class="form-outline mb-2">
          <p class="lead fw-normal mb-0 me-3">Enter Your Username</p>
            <input type="text" id="form3Example3" name="username" class="form-control form-control-lg"
              placeholder="Enter a valid Username" autocomplete="off" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-1">
          <p class="lead fw-normal mb-0 me-3">Enter Your Password</p>
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
              placeholder="Enter password" autocomplete="off" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="login2" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 
  <!-- </div>  -->
</section>
     <script src="../Assets/js/jquery.min.js"></script>
      <script src="../Assets/js/bootstrap.min.js"></script>
      <script src="../Assets/js/sweetalert2.all.min.js"></script>
   </body>
</html> 
<?php 
       

   
    
      if (isset($_POST["login2"])) {
        // Database connection
        
      
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
      
        // Check if user exists in the database
        $sql = "SELECT * FROM tbl_user WHERE user_org_name = '$username'";
        $result = mysqli_query($conn, $sql);
      
        if (mysqli_num_rows($result) == 0) {
          echo "
            <script> 
              Swal.fire('Error', 'Invalid credentials!', 'error');
            </script>";
        } else {
          $row = mysqli_fetch_assoc($result);
      
          if ($row["user_status"] != '1') {
            echo "
              <script> 
                Swal.fire('Error', 'Your account is not activated!', 'error');
              </script>";
        //   } elseif (!password_verify($password, $row["user_org_password"])) {
        //     echo "
        //       <script> 
        //         Swal.fire('Error', 'Invalid credentials!', 'error');
        //       </script>";
          } else {
            // User authentication successful
            $_SESSION["loggedin"] = true;
            $_SESSION["role"] = $row["user_auth_type"];

            
      
            if ($_SESSION["role"] == 'admin') {
              echo "
                <script> 
                  Swal.fire('Success', 'Login Successful', 'success')
                  .then(function() 
                  { window.location = '../admin/dashboard.php'; });
                  </script>";
               
            } elseif ($_SESSION["role"] == 'manager') {
              echo "
                <script> 
                  Swal.fire('Success', 'Login Successful', 'success')
                  .then(function() 
                  { window.location = 'manager/dashboard.php'; });
                </script>";
               
            }else{
                header('Location: index.php');
            }
          }
        }
      }
      ?>
      



