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
					<div class="forms ml-auto">
                        <a href="index.html" class="btn"><span class="fa fa-user-circle-o"></span> LOG OUT </a>
             
                    </div>

                   
                </div>
                <div class="nav-top-wthree">
                    
                    <!-- //nav -->
                   
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->
    </div>
    <!-- //banner-->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-5 ">
		<h3 class="title-wthree mb-lg-5 mb-4 text-center">Shop Now</h3>
		<div>
			<div>
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
			</div>
			<div>
				<div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="#" method="post" class="newsletter">
                                <input class="search" type="search"name="cat" placeholder="Search.." required="">
                                <button class="form-control btn" value="" name="search"><span class="fa fa-search"></span></button>

                            </form>
                        </div>
                    </div>
			</div>
			</div>
            
			
			
			 
			
            <!--/row-->
			<?php
			$con = mysqli_connect("localhost","root","");
			mysqli_select_db($con,"bag");
			if(isset($_POST['search']))
				
			{
	           $cat = $_POST['cat'];
			
			$sql="select * from newbag where cat ='$cat'";
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
                                 echo "</div>";
                             echo "</div>";
                            echo"<ul class=stars>";
                                    
                                    echo"<li><a><span class=fa fa-star-half-o aria-hidden=true></span></a></li>";
                                    
                                echo"</ul>";
                         echo "</div>";
                     echo "</div>";
                 echo "</div>";
			}}
                  ?>
                <!--//row-->
            </div>

        </div>
    </section>
	
	
	
	
	
	   <div>
              <h3 class="title-wthree-single my-lg-5 my-4 text-left">Featured Bags</h3>
                <div class="row shop-wthree-info text-center">
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b1.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="shop2.php">Messenger Bag </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">Rs.799.00</span> Rs.675.00</span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b2.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="shop2.php">Shoulder Bag (Pink) </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">Rs.799</span> Rs.675.00</span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b3.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="shop2.php">Sling Bag </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">Rs.599</span> Rs.475.00</span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 shop-info-grid text-center mt-4">
                        <div class="product-shoe-info shoe">
                            <div class="men-thumb-item">
                                <img src="images/b4.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="shop2.php">Tote (Blue) </a>
                                </h4>

                                <div class="product_price">
                                    <div class="grid-price">
                                        <span class="money"><span class="line">Rs.799</span> Rs.675.00</span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                    <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
   
   </div>
   
   
   
   
   
   
   
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