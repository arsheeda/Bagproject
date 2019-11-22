<?php

echo "hfhifhqifhiq";

$dbhost = 'localhost';
 $dbuser = 'root'; 
$dbpass = ''; 

//$name=$_POST['itemname'];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 $found=mysqli_select_db($conn,'bag' );
if(! $found)

   die('Could not find database ' .mysqli_error($conn));
//$sql = "delete from newbag where name='$name'";
//$retval = mysqli_query($conn,$sql);
echo mysqli_error($conn);


?>