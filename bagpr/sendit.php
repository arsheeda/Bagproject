
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Bagg-IT</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="log-w3pvt">Bagg-IT</span></a> <label class="sub-des"></label></h1>
                    </div>

                   
                </div>
                <div class="nav-top-wthree">
                   
                    <center>
                    
					<div id="logo">
                        <h1><span class="log-w3pvt">Your Item Has Been Inserted Successfully.</span></a> <label class="sub-des"></label></h1>
                    </div>
					</center>
                    <div class="clearfix"></div>
                </div>
				
            </div>
        </header>
        <!-- //header -->
      
    </div>><center><img src="gg.gif"></center>
	
<?php
$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
if (isset($name)) 
{
$path= 'Uploads/';
if (!empty($name))
{
move_uploaded_file($tmp_name, $path.$name);
$dbhost = 'localhost';
 $dbuser = 'root'; 
$dbpass = ''; 
$cat=$_POST['cat'];
$name2=$_POST['name'];
$desc=$_POST['desc'];
$amt=$_POST['amt'];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 $found=mysqli_select_db($conn,'bag' );
if(! $found)
   die('Could not find database ' .mysqli_error($conn));
$sql = "INSERT INTO newbag (cat,name,dsc,amt,img) values('$cat','$name2','$desc',$amt,'Uploads/$name');";
$retval = mysqli_query($conn,$sql);
echo mysqli_error($conn);
}
}
?>
</body >

</html>