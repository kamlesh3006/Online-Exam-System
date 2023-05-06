
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">    
    <section class="vh-100">
        <div class="container h-100 w-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card shadow-2-strong shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="border-radius: 0.4rem;">
                <hr class="my-1">
                <div class="card-body p-1 text-center">
                    <img src="qwe.jpg" alt="" class="image">  
                    <div class="form-outline mb-4">
                    <hr class="my-3">
                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg" placeholder="ID" name="username"/>
                    </div>
        
                    <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" name="password"/>
                    </div>
        
        
                    <button class="btn btn-primary btn-lg btn-block w-100" type="submit" style="background-color: #631799d1;" href="">Login</button>
        
                    <hr class="my-1">
                </div>
                </div>
            </div>
            </div>
        </section>
        </form>
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
</body>
</html>