<?php
$con = mysqli_connect('localhost','root','','bag');
mysqli_select_db($con,"bag");
mysqli_error($con);
$sql="DELETE FROM newbag WHERE name = '".$name."'";
$result = mysqli_query($con,$sql);
if ($result && mysqli_num_rows($result) > 0) {
    header("Location:welcome.html");
exit;
} else {
	echo("incorrect username or password");
  
}