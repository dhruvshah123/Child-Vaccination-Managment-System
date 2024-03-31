<?php include("database.php"); 
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter child details
  
  </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <form action="#" form method="POST">
      <h2>Enter details for vaccination</h2>
      <div class="input-field">
        <input type="text" name="uname" required>
        <label>Enter your name</label>
      </div>  
      <div class="input-field">
        <input type="text" name="name" required>
        <label>Enter your Child name</label>
      </div>
      <div class="input-field">
        <input type="date" name="birth" required>
        <label>Enter your birthdate</label>
      </div>
      <div class="input-field">
        <input type="text" name="age" required>
        <label>Enter your Age</label>
      </div>
      <div class="input-field">
        <input type="text" name="past" required>
        <label>Enter your past details</label>
      </div>
      <button type="submit">SUBMIT</button>
      
    </form>
  </div>

</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = $_POST['uname'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $age = $_POST['age'];
    $past= $_POST['past'];

    
    $sql ="INSERT INTO `child` (`uname`, `name`, `birth`, `age`, `past`) VALUES ('$uname', '$name', '$birth', '$age', '$past');";
    
    $data= mysqli_query($conn,$sql);

    if($data){
        echo "";
        session_start();
        header("location:web.php");
    }
    else{
        echo "failed";
    }
}
?>