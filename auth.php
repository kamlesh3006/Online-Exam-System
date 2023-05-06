<?php
include'C:\xampp\htdocs\exam\db.php';
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