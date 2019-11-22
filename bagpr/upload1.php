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
		function buy(A)
{
	document.cookie ="itemid="+A;
	window.location.assign("single2.php")
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
                        <h1> <a href="index.html"><span class="log-w3pvt">Bagg-IT</span></a></h1>
                    </div>

                   
                </div>
                <div class="nav-top-wthree">
                    
                    <!-- //nav -->
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
    <!-- //banner-->
    <!--/banner-bottom -->
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
				if($i%4==0)
           echo "<div class=row shop-wthree-info text-center>";
	             $i=$i+1;
             echo "    <div class=col-lg-3 shop-info-grid text-center mt-4>";
               echo "      <div class=product-shoe-info shoe>";
                      echo "   <div class=men-thumb-item > ";
                             echo "<img src=$row[4] class=img-fluid onclick=buy($row[5]) >";

                        echo " </div>";
                         echo "<div class=item-info-product >";
                             echo "<h4>";
                               echo " <a >$row[2] </a>";
                             echo "</h4>";

                             echo "<div class=product_price>";
                                 echo "<div class=grid-price>";
                                     echo "<span class=money> Rs $row[3] </span>";
									 echo "<a href=deleteit.php?dsc=$row[2]>Delete</a>";
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
                                <input name="cat" id="text1" type="text" value="" placeholder="Category" required="">
                            </div>

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
                  
					
					
					
                </div>
            </div>
        </div>
    </section>

	
	
	
   
   
   
    <section class="shipping-wthree">
        <div class="shiopping-grids d-lg-flex">
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"><span class="fa fa-truck" aria-hidden="true"></span>
                </div>
                <div class="icon-gd-info">
                    <h3>FREE SHIPPING</h3>
                    <p>On all order over $2000</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd sec text-center">
                <div class="icon-gd"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>FREE RETURN</h3>
                    <p>On 1st exchange in 30 days</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"> <span class="fa fa-gift" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>MEMBER DISCOUNT</h3>
                    <p>Register &amp; save up to $29%</p>
                </div>

            </div>
        </div>

    </section>
    <!--//shipping-->
    <!-- footer -->
    <div class="footer_agileinfo_topf py-5">
        <div class="container py-md-5">
       

            <div class="w3ls-fsocial-grid">
                <h3 class="sub-w3ls-headf">Follow Us</h3>
                <div class="social-ficons">
                    <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li><a href="#"><span class="fa fa-google"></span>Google</a></li>
                    </ul>
                </div>
            </div>
            <div class="move-top text-center mt-lg-4 mt-3">
                <a href="#home"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>

</body>
</html>