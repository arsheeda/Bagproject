<html> 
<head>
 <title>Connecting MySQL Server</title> 
</head> 
<body> 
<?php
 $dbhost = 'localhost';
 $dbuser = 'root'; 
$dbpass = ''; 

$name=$_POST['name'];
$prize=$_POST['prize'];
$id=$_POST['id'];
$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
if (isset($name)) 
{
$path= 'Uploads/images/';
if (!empty($name))
{
move_uploaded_file($tmp_name, $path.$name);
}
}
?>
