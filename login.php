<?php
    session_start();

    include('../RegisterForm/db.php');

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $gmail = $_POST['mail'];
        $password = $_POST['password'];


        if(!empty($gmail) && !empty($password)){
            $query = "select * from register where email = '$gmail' limit 1";
            $result = mysqli_query($con,$query);

            if($result){
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password){
                        header("location:../Slider/HomeNavBar.php");
                        die;
                    }
                }
            }
            echo "<script type = 'text/javascript'>alert('wrong username or password')</script>";
        }
        else{
            echo "<script type = 'text/javascript'>alert('wrong username or password')</script>";

        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBT TUTOR</title>
    <link rel="stylesheet" href="../RegisterForm/register.css">
</head>  
<body>
    <div class="login">
        <h1>Login</h1>
    <form method="POST">
        <label>Email</label>
        <input type="text" name="mail" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <input type="submit" name="" value="Submit">
    </form>
    <p>Not have an account? <a href="../RegisterForm/register.php">Sign Up here</a></p>



    
</body>
</html>