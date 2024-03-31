<?php
include("database.php");
error_reporting(0);
session_start();
$namee=$_SESSION['uname'];
$query="SELECT * FROM `child` WHERE uname='$namee'"; 
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total !=0){
    echo "";
}

else{
    echo"No record found";
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View your child details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
        }
        .card {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table td, .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tr:hover {
            background-color: #ddd;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .btn-pencil {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        .btn:hover {
            background-color: #3e8e41;
            border-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <th>Child Name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Past</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php while($result=mysqli_fetch_assoc($data)) { ?> 
                        <tr>
                            <td><?php echo $result['name'] ?></td>
                            <td><?php echo $result['birth'] ?></td>
                            <td><?php echo $result['age'] ?></td>
                            <td><?php echo $result['past'] ?></td>
                            <td><a href="#" class="btn btn-pencil">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
