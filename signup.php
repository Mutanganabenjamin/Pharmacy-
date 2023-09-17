<?php
require("server.php");
$username=$_POST['username'];
$email=$_POST['email'];
$Password=$_POST['Password'];
$confirmpassword=$_POST['confirmpassword'];
echo"creation of new account is successful..";

$sql="INSERT INTO  users(username,email,Password,confirmpassword) values('$username','$email','$Password','$confirmpassword')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"folse".mysqli_error($con);
}
?>
