 <?php

$fullname=$_POST['fullname'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$con = mysqli_connect("localhost","root","","bag");
mysqli_select_db($con,'bag' );
$sql="insert into register values('$fullname','$address','$username','$password','$phone');";
mysqli_query($con,$sql);

?> 


<html>
<head>

<title>Bagg-IT</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />


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
			</div>
			<center>
			<br><br>
			<font size="10" color="white" style="arial"><b>USER HERE</b></font>
			<br><br>
			</center>
        </header>
        <!-- //header -->

    </div>
	<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-unlock-alt"></span>
                </div>
                <div class="content-bottom">
                    <form  method="post" action="logindb.php">
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="username" id="username" type="text" value="" placeholder="User Name" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="password" id="password" type="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn" id="submit" onclick="move()"value="Login">Sign In</button>
                       </div>
</form>
<script language="javascript">
function check(form)
{

if(form.userid.value == "admin" && form.pwd.value == "admin")
{





	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}
</script>

</body>
</html>


