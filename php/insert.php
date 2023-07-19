<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dataBaseName = "corvit-cit";

    $con = new mysqli($serverName, $userName, $password, $dataBaseName);

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $rollno = $_POST['rollno'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $pass = $_POST['pass'];

        $sql = "INSERT INTO `std-marks` (`name`, `roll_num`, `father_name`,`gender`, `age`, `email`, `password`) VALUES ('$name','$rollno', '$fname','$gender','$age' ,'$email', '$pass')";

        if ($con->query($sql)) {
            echo'<div class="alert alert-success my-0" role="alert">
            Data Inserted Successfully!
          </div>';
        }else{
            echo '<div class="alert alert-danger my-0" role="alert">
            Problem Occurred!
          </div>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Sign-Up Form</title>
</head>
<body>
    <div class="container-fluid">
        <div class="form">
        <form action="insert.php" method="POST">
            <div class="first">
            <input type="text" name="name" class="items" placeholder="Your Name">
            <input type="text" name="fname" class="items" placeholder="Last Name">
            </div>
        <input type="text" name="rollno" class="items" placeholder="Roll Number">
            <div class="sec">
                <span class="me-4">
                <input type="radio" class="items" name="gender" value="Male">
                Male
                </span>
                <span>
                <input type="radio" class="items" name="gender" value="Female">
                Female
                </span>
                <span class="ms-4">
                <input type="radio" class="items" name="gender" value="Other">
                Other
                </span>
            </div>
            <input type="email" class="items" placeholder="Your Email Address..." name="email">
            <input type="number" class="items" placeholder="Your Age..." name="age">
            <input type="password" class="items" id="pass" placeholder="Type your password..." name="pass">
            <!-- <input type="password" class="items" id="c-pass" placeholder="Confirm your password..."> -->
            <button class="btn btn-success w-50 mt-4 ms-2" type="submit">Sign In</button>
        </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
   $(document).ready(()=>{
        var pass = $('#pass');
        var c_pass = $('#c-pass');
        


   })
</script>
</html>