
<?php
  //include("db.php");
  //session_start();
?>   

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
<nav class="fixed top-0 z-50 w-full bg-violet-900">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        
        <a href="#" class="flex ml-2 md:mr-24" >
          <span class="self-center text-xl font-semibold sm:text-3xl whitespace-nowrap text-white" style="font-weight: bolder;">Online Exam System</span>
        </a>
      </div>
    </div>
  </div>
</nav>
  <div class="container-scroller border-b border-gray-200">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              
              <h2 class="px-6 py-3 text-xl text-center" style="font-weight:bold;">Login</h2>
              <h4 class="font-weight-light px-6 py-3 text-center">Sign in to continue.</h4>
              <form class="pt-3" action="" method="POST">
                <div class="form-group my-2 py-1">
                  <input type="text" class="bg-gray-50 border-b border-gray-400 form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group my-2 py-1">
                  <input type="password" class=" bg-gray-50 border-b border-gray-400 form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <span id = "err_msg" style="color:red"> </span> <br><br>  
                <div class="mt-3 form-group">
                  <input type="submit" name="Login" value="Login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href=""></div>
                </div>
                
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>

<style>
  *{
    margin:0px;
    padding:0px;
  }
  .container-scroller{
    margin-top:10vh;
  }
  .form-group{
    margin-left:89vh;
  }
</style>
<?php
include'C:\xampp\htdocs\examm\db.php';
if(isset($_POST['Login']))
{
 $query="select * from login where username='".$_POST['username']." ' and password='".$_POST['password']."'";
 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
            $row=mysqli_fetch_array($res);
            extract($row);

            //$_SESSION['s_id']=$row['s_id'];
            //$_SESSION['s_name']=$row['s_name'];
            //$_SESSION['s_username']=$row['s_username'];
               
            echo "<script>";
            echo "alert('Login Successfully');";
            echo "window.location.href='admin.php';";
            echo "</script>";
        
        
      }
}
if(isset($_POST['Login']))
{
 $query="select * from student where username='".$_POST['username']." ' and password='".$_POST['password']."'";
 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
            $row=mysqli_fetch_array($res);
            extract($row);

            //$_SESSION['s_id']=$row['s_id'];
            //$_SESSION['s_name']=$row['s_name'];
            //$_SESSION['s_username']=$row['s_username'];
               
            echo "<script>";
            echo "alert('Login Successfully');";
            echo "window.location.href='student.php';";
            echo "</script>";
        
        
      }
  }
  if(isset($_POST['Login']))
{
 $query="select * from teacher where username='".$_POST['username']." ' and password='".$_POST['password']."'";
 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
            $row=mysqli_fetch_array($res);
            extract($row);

            //$_SESSION['s_id']=$row['s_id'];
            //$_SESSION['s_name']=$row['s_name'];
            //$_SESSION['s_username']=$row['s_username'];
               
            echo "<script>";
            echo "alert('Login Successfully');";
            echo "window.location.href='teacher.php';";
            echo "</script>";
        
        
      }
     else
     {
          echo "<script>";
          echo "alert('Email or Password is Invalid');";        
          echo "</script>";
    }
  }
?>