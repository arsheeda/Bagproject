
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
<form method="post" action="bagupdt.php" name="StudentRegistration" onSubmit="return(validatee());" enctype="multipart/form-data" >

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
                   
                    
                    <div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="#" method="post" class="newsletter">
                                <input class="search" type="search" placeholder="Search here..." required="">
                                <button class="form-control btn" value=""><span class="fa fa-search"></span></button>

                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->

    </div>

        <section class="banner-bottom py-5">
        <div class="container py-5">
            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Shop Now</h3>
            <!--/row-->
			<?php
			$con = mysqli_connect("localhost","root","");
			mysqli_select_db($con,"bag");
			$sql="select * from newbag";
			$data=mysqli_query($con,$sql);
			if(! $data )
			die('Could not enter data: ' . mysqli_error($con));
			$f=0;
			$i=0;
			while ($row=mysqli_fetch_row($data))
    {
				if($i%10==0)
           echo "<div class=row shop-wthree-info text-center>";
	             $i=$i+1;
             echo "    <div class=col-lg-3 shop-info-grid text-center mt-4>";
               echo "      <div class=product-shoe-info shoe>";
                      echo "   <div class=men-thumb-item > ";
                             echo "<img src=$row[3] class=img-fluid onclick=buy($row[4]) >";

                        echo " </div>";
                         echo "<div class=item-info-product >";
                             echo "<h4>";
                               echo " <a >$row[1] </a>";
                             echo "</h4>";

                             echo "<div class=product_price>";
                                 echo "<div class=grid-price>";
                                     echo "<span class=money> Rs $row[2] </span>";
                                 echo "</div>";
                             echo "</div>";
                            echo"<ul class=stars>";
                                    
                                    echo"<li><a><span class=fa fa-star-half-o aria-hidden=true></span></a></li>";
                                    
                                echo"</ul>";
                         echo "</div>";
                     echo "</div>";
                 echo "</div>";
			}
                  ?>
                <!--//row-->



                
            </div>

        </div>
     
    </section>


    <!-- //banner-->
    <!--/login -->
    <section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-user-circle-o"></span>
                </div>
                <div class="content-bottom">
                    <form method="post" enctype="multipart/form-data" action="sendit.php" >
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="name" id="text1" type="text" value="" placeholder="Item Name" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="amt" id="text1" type="text" value="" placeholder="Item Prize" required="">
                            </div>
                        </div>
                    
                        

                    
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="desc" id="myInput" type="text" placeholder="Description">
                            </div>
                        </div>
						<div class="field-group">
                            <div class="content-input-field">
                                <input name="file" id="file" type="file"  accept="image/*" placeholder="choose a file">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn">Submit item</button>
                        </div>

                        <div class="list-login-bottom text-center mt-lg-5 mt-4">

                           



                        </div>
                    </form>
                </div>
            </div>
            <div class="content-grid">
                
                        <div class="content-input-field">

<form action="temp.php" method="post">



                            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Delete Item</h3>

<input name="itemname" placeholder="ENTER ITEM NAME"/>

<button type="submit" class="btn" >DELETE</button>
</form>
         
                        </div>

            </div>
        </div>
    </section>
s
   

</body>

</html>
