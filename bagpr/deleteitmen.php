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
                        <h1><span class="log-w3pvt">Your Item Has Been Deleted Successfully.</span></a> <label class="sub-des"></label></h1>
                    </div>
					</center>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->
      
    </div>><center><img src="gg.gif"></center>
<?php

$dbhost = 'localhost';
 $dbuser = 'root'; 
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 $found=mysqli_select_db($conn,'bag' );
if(! $found)
   die('Could not find database ' .mysqli_error($conn));
$dsc=$_GET['dsc'];
$sql = "DELETE FROM bagmen WHERE dsc = '$dsc';";
$retval = mysqli_query($conn,$sql);
echo mysqli_error($conn);

?>
</body >
</html>