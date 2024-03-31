<?php include("database.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<div class="contact-container">
  <div class="left-col">
  
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
      <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
      </label>
      <div class="description">Dark Mode</div>
    </div>

    <h1>BOOK APPOINTMENT</h1>
    <p>Planning to visit Indonesia soon? Get insider tips on where to go, things to do and find best deals for your next adventure.</p>

    <form id="contact-form" method="POST">
      <label for="name">First name</label>
      <input type="text" id="name" name="First" placeholder="Your First Name" required>
      <label for="name">Last name</label>
      <input type="text" id="name" name="Last" placeholder="Your Last Name" required>
      <label for="name">Email</label>
      <input type="text" id="name" name="email" placeholder="Your Email" required>
      <label for="name">No of Vaccine Taken</label>
      <input type="text" id="name" name="Vaccine" placeholder="Vaccine Taken" required>
      <label for="date">Booking date</label>
      <input type="date" id="name" name="date" placeholder="Slot Booking Date" required>
      <label><b>Select Vaccine</b><span class="error">*</span></label><br>
            <select name="book" required>
                <option value="" disabled selected>Select an option</option>
                <option value="POLIO">POLIO</option>
                <option value="SWINE FLU">SWINE FLU</option>
                <option value="SWINE FLU">COVAXINE</option>
                <option value="SWINE FLU">CHICKENPOX</option>
                <option value="SWINE FLU">MUMPS</option>
                <option value="SWINE FLU">FLU</option>
                <option value="SWINE FLU">TETANUS</option>
                <option value="SWINE FLU">RUBELLA</option>
            </select>
            <button>Submit</button>
    </form>
    <div id="error"></div>
    <div id="success-msg"></div>
  </div>
</div>
<script>
       const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);


const name = document.getElementById('name');
const message = document.getElementById('message');
const contactForm = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
const successMsg = document.getElementById('success-msg');

const toggleSwitch1 = document.querySelector('.theme-switch input[type="checkbox"]');
const submitBtn = document.querySelector('button');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        submitBtn.style.setProperty('--hover-color', 'white'); // Change hover color to white in dark mode
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        submitBtn.style.setProperty('--hover-color', 'grey'); // Change hover color to grey in light mode
    }    
}

toggleSwitch1.addEventListener('change', switchTheme, false);

  
const validate = (e) => {
  e.preventDefault();
 
  if (name.value.length < 3) {
    errorElement.innerHTML = 'Your name should be at least 3 characters long.';
    return false;
  } 
  
 
  e.preventDefault();
  setTimeout(function () {
    successMsg.innerHTML = '';
    document.getElementById('contact-form').reset();
  }, 6000);

  return true;

}

    </script>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First = $_POST['First'];
    $Last = $_POST['Last'];
    $email=$_POST['email'];
    $Vaccine = $_POST['Vaccine'];
    $date = $_POST['date'];
    $book = $_POST['book'];
    $sql = "INSERT INTO vaccine (`First`,`Last`,`email`,`Vaccine`,`date`,`book`,`status1`) VALUES ('$First','$Last','$email', '$Vaccine', '$date', '$book',0)";
    $data = mysqli_query($conn, $sql);

    if ($data) {
      echo "";
     // session_start();
     // header("location:web.php");
     $otp = rand(100000,999999);
     $_SESSION['otp'] = $otp;
     $_SESSION['email'] = $email;
     require "Mail/phpmailer/PHPMailerAutoload.php";
     $mail = new PHPMailer;

     $mail->isSMTP();
     $mail->Host='smtp.gmail.com';
     $mail->Port=587;
     $mail->SMTPAuth=true;
     $mail->SMTPSecure='tls';

     $mail->Username='shahdhruek@gmail.com';
     $mail->Password='bmrjafdbvqnnhffw';

     $mail->setFrom('email account', 'OTP Verification');
     $mail->addAddress($_POST["email"]);

     $mail->isHTML(true);
     $mail->Subject="Your verify code";
     $mail->Body="<p>Dear user,Your slot is booked for date $date and for vaccine $book </p> <h3>Your verify OTP code for vaccine booking is $otp <br></h3>
     <br><br>
     <p>With regrads,</p>
     <b>From Child vaccination centre</b>";

             if(!$mail->send()){
                 ?>
                     <script>
                         alert("<?php echo "Register Failed, Invalid Email "?>");
                     </script>
                 <?php
             }else{
                 ?>
                 <script>
                     alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                     window.location.replace('verification1.php');
                 </script>
                 <?php
             }
        
    } else {
        echo "Not";
    }
}
?>
