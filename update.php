
<?php
include 'db.php';
$id=$_GET['updateid'];
$sql="select * from register where Id=$id";
$result= mysqli_query($con,$sql);
$name=['fname'];
$lastname=['lname'];
$email=['email'];
$mobile=['contact'];
$password=['password'];

if (isset($_POST['submit'])){
    $name=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['contact'];
    $password=$_POST['password'];
    if(empty($email) && empty($password) && empty($name) && empty($lastname)){
      echo "<script type = 'text/javascript'>alert('Ju lutem plotesoni te gjitha te dhenat!')</script>";
    };


$sql="update register set id=$id, fname='$name', email='$email',lname='$lastname',
 contact='$mobile', password='$password' where Id=$id ";

$result=mysqli_query($con,$sql);
if ($result){
    header('location:dashboard.php');
}
  
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>CRUD</title>
  </head>
  <body>
    <div class="container my-5"><form method="post">
  <div class="form-group">
    <label>NAME</label>
    <input type="text" class="form-control" placeholder="Enter name" name="fname" autocomplete="on">
    <div class="form-group">
    <label>LAST NAME</label>
    <input type="text" class="form-control" placeholder="Enter name" name="lname" autocomplete="on">
  </div> <div class="form-group">
    <label>EMAIL</label>
    <input type="email" class="form-control" placeholder="Entermail e" name="email" autocomplete="on">
  </div>
  <div class="form-group">
    <label>NUMBER</label>
    <input type="text" class="form-control" placeholder="Enter number" name="contact"autocomplete="on">
  </div> <div class="form-group">
    <label>PASSWORD</label>
    <input type="text" class="form-control" placeholder="Enter password" name="password"autocomplete="on">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form></div>

   
  </body>
</html>