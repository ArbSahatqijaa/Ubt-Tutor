<?php
include 'db.php';

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];



     $sql="delete from register where Id=$id";
     $result=mysqli_query($con,$sql);
     if($result){
        header('location:dashboard.php');
     }else{
        die (mysqli_error($con));
     }
     }




?>