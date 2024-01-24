<?php
    session_start();

    include('db.php');

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $gender = $_POST['gender'];
        $num = $_POST['number'];
        $adress = $_POST['add'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($email) && !empty($password)){
            $query = "insert into register (fname,lname,gender,contact,adress,email,password) values ('$firstname','$lastname','$gender','$num','$adress','$email',' $password')";

            mysqli_query($con,$query);

            echo "<script type = 'text/javascript'>alert('Ju jeni Regjistruar me Sukses!')</script>";
        }
        else{
            echo "<script type = 'text/javascript'>alert('Ju lutem shenoni te dhena Valide!')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBT TUTOR</title>
    <link rel="stylesheet" href="register.css">
</head>  
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method = "POST">
        <label>First Name</label>
        <input type="text" name="fname" required>
        <label>Last Name</label>
        <input type="text" name="lname" required>
        <label>Gender</label>
        <input type="text" name="gender" required>
        <label>Phone</label>
        <input type="text" name="number" required>
        <label>Adress</label>
        <input type="text" name="add" required>
        <label>Email</label>
        <input type="text" name="mail" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="Submit">
    </form>
    <p>By clicking the Sign Up button,you agree to our <br>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>
    <p>Already have an accunt? <a href="../LoginForm/login.php">Login Here</a></p>
  
    </div>
    
</body>
</html>