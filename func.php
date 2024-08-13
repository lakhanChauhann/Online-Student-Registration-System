<?php
include "connect.php";
if(isset($_POST['log_submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from userdata where email='$email' and password='$password'";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($result);
    if(mysqli_num_rows($result)==1){
        // echo "<script>alert('Login Successfully')</script>";
        echo "<script>window.location.href='home.php';</script>";
    }
    // else{
    //     echo "<script>alert('Enter Valid Details')</script>";
    //     echo "<script>window.location.href='index.php';</script>";
    //     die();
    // }


}

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"insert into userdata values('$username',' $email', '$password')");
 if($result){
   echo"<h1>Thank you for registration $username Login Again</h1>";
   echo "<script>alert('Registration Successful!')</script>";
   echo"<script>window.open('index.php','_self')</script>";
  }
  else{
    echo"<h1>Registration Error</h1>";
  }
}

?>