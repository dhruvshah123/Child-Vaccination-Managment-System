<?php include("database.php"); 
?>
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $utype=$_POST["utype"];
    
    $sql="Select * from database1 where uname='$uname' And password='$password' And  utype='$utype'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>=1){
        $login = true;
        if($utype=='Admin'){
          session_start();
          $_SESSION['loggedin']=true;
        $_SESSION['uname']=$uname;
        header("location:adminindex1.php");  
        }else{
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['uname']=$uname;
          header("location:web.php");
        }
    }
    else{
        $showError="invalid credentials";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles1.css">
</head>
<body>
 <nav>
<?php
                            if($login){
                              echo  ' <div class="alert alert" role="alert">
                              <strong>Success!</strong>Your account is created
                              </div>';
                            }
                            if($showError){
                                echo ' <div class="alert alert" role="alert">
                                <strong></strong>'.$showError.'
                                </div>';
                            }
                        ?>
    </nav> 

<div class="ring">
  <i style="--clr:#00ff0a;"></i>
  <i style="--clr:#ff0057;"></i>
  <i style="--clr:#fffd44;"></i>
  <form method="post" class="login">
    <h2>Login</h2>
    <div class="inputBx">
      <input type="text" name="uname" placeholder="Username">
    </div>
    <div class="inputBx">
      <input type="password" name="password" placeholder="Password">
    </div>
    <div class="inputBx">
      <input type="text" name="utype" placeholder="Type">
    </div>
    <div class="inputBx">
      <input type="submit" value="Sign in">
    </div>
    <div class="links">
      <a href="#">Forget Password</a>
      <a href="registration.php">Signup</a>
    </div>
  </div>
</div>
</form>
<!--ring div ends here-->
</body>
</html>
