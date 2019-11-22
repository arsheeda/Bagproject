<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con = mysqli_connect('localhost','root','','bag');
mysqli_select_db($con,"bag");
mysqli_error($con);
$sql="SELECT username, password FROM register WHERE username = '".$username."' && password = '".$password."'";
$result = mysqli_query($con,$sql);
if ($result && mysqli_num_rows($result) > 0) {
    header("Location:shop2.php");
exit;
} else {
	echo("incorrect username or password");
  
}