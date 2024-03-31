<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    header("location: registration.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Vaccine On</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">Vaccine On</a></li>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item button"><a href="login1.php">Login</a></li>
            <li class="item button secondary"><a href="logout-user.php">Logout</a></li>
            <li class="toggle"><a href="#"><span class="bars"></span></a></li>
        </ul>
    </nav>
    <div class="heading">
        <h1>Welcome <?php echo $_SESSION['uname']?> to Vaccine On!</h1>
    </div>
    <div class="container">
   
    </div>

    
    <div class="review">
        <div class="rev-container">
			
            <div class="rev-card">
                <div class="identity">
                    <img src="assests\children.png"><a href="viewchild1.php"><p>View Children Details</p></a>
                    
					</div>
                
            </div>
            
        </div>
    </div>
    <marquee style="background: linear-gradient(to right, grey, black); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">"Education is for improving the lives of others and for leaving your community and world better than you found it."</div></marquee>

    <!-- FOOTER -->
        <footer>
            <div class="footer-container">
                <div class="left-col">
                    <img src="images/icon/logo - Copy.png" style="width: 200px;">
                    <div class="logo"></div>
                    <div class="social-media">
                        <a href="#"><img src="assests\fb.png"></a>
                        <a href="#"><img src="assests\insta.png"></a>
                        <a href="#"><img src="assests\tt.png"></a>
                        <a href="#"><img src="assests\ytube.png"></a>
                        <a href="#"><img src="assests\linkedin.png"></a>
                    </div><br><br>
                    <p class="rights-text">Copyright © 2023 Created By Dhruv shah,Suchi Vadgama,Manjit All Rights Reserved.</p>
                    <br><p><img src="assests/location.png">DEPSTAR-CHARUSAT<br>Changa</p><br>
                    <p><img src="assests/phone.png"> +91 7874951647<br><img src="assests/mail.png">&nbsp; shahdhruv318@gmail.com</p>
                </div>
                
            </div>
        </footer>
    
</body>
</html>