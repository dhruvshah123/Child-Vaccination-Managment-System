<?php include("database.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("img1.jpg");
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type='text'],
        input[type='email'],
        input[type='password'],
        select,
        input[type='date'] {
            width: calc(100% - 42px);
            padding: 8px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            font-size: 16px;
        }

        input[type='submit'] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        input[type='submit']:hover {
            background-color: #333;
        }

        .error {
            color: red;
            margin-left: 5px;
        }

        .center-text {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Child Vaccination Management System</h2>
        <form method="POST">
            <label><b>Username</b><span class="error">*</span></label>
            <input type="text" name="uname" placeholder="First Name" required>

            <label><b>Last Name</b><span class="error">*</span></label>
            <input type="text" name="lname" placeholder="Enter Last Name" required>

            <label><b>Gender</b><span class="error">*</span></label><br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female

            <label><b>City</b><span class="error">*</span></label><br>
            <select name="city" required>
                <option value="" disabled selected>Select a city</option>
                <option value="Delhi">Delhi</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Haryana">Haryana</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Pune">Pune</option>
                <option value="Punjab">Punjab</option>
                <option value="Uttarakhand">Uttarakhand</option>
            </select>

            <label><b>Birth Date</b><span class="error">*</span></label><br>
            <input type="date" name="birth" required>

            <label><b>You are a</b><span class="error">*</span></label><br>
            <select name="utype" required>
                <option value="" disabled selected>Select an option</option>
                <option value="Admin">Admin</option>
                <option value="Parent">Parent</option>
            </select>

            <label><b>Email Address</b><span class="error">*</span></label><br>
            <input type="email" name="email" placeholder="Enter email address" required>

            <label><b>Password</b><span class="error">*</span></label><br>
            <input type="password" name="password" placeholder="Enter Password" required>

            <input type="submit" name="register" value="Register">
        </form>
        <div class="center-text">
            Already have an Account? <a href="login1.php"><b>Login</b></a>
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $birth = $_POST['birth'];
    $utype = $_POST['utype'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO database1 (`uname`, `lname`, `Gender`, `city`, `birthdate`, `utype`, `email`, `password`,`status`) VALUES('$uname','$lname','$gender','$city','$birth','$utype','$email','$password',0)";
    $data = mysqli_query($conn, $sql);

    if ($data) {
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
        $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
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
                        window.location.replace('verification.php');
                    </script>
                    <?php
                }
        
    } else {
        echo "Registration failed!";
    }
}
?>
