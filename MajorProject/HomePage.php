<?php 
		session_start();
		require "../MajorProject/db/config.php";
		$sql = 'select * from users';
		$result = mysqli_query($connect , $sql);
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Powers Store</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="header">
        <div class="container">
            <div class="navbar">

                <div class="logo">
                    <img src="./images/logo-neww-removebg-preview.png" width="252px" />
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="./HomePage.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="inf.html">About</a></li>
                        
                            <?php if(empty($_SESSION['id'])){ ?>
                               <li><a href="./log/login.php">Login</a></li>
                            <?php } else{?>
                                <a href="http://localhost/MajorProject/log/logout.php">Log Out</a> 
                            <?php }?>
                    </ul>
                </nav>
                <a href="inf.html"><img src="./images/cart.png" width="25px" height="25px"></a>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Exercise <br />A New Mode! </h1>
                    <p>
                        Your goal is to be better than yesterday. You are your greatest competition
                        <br />All you need is to know what your goal is and be consistent everyday in achieving it!
                    </p>
                    <a href="product.html" class="btn">Explore Now &#10132;</a>
                </div>
                <div class="col-2">
                    <img src="./images/all-sports-banner.png">
                </div>
            </div>
        </div>
    </div>
    
    <div class="small-container">
        <div class="categories">
            <div class="row">
                <div class="col-3">
                    <h1>Clothes</h1>
                    <a href=" "><img src="images/category-one.png"></a>
                </div>

                <div class="col-3">
                    <h1>Sport equipments</h1>
                    <a href=" "><img src="images/category-2.jpg"></a>
                </div>

                <div class="col-3">
                    <h1>Shoes</h1>
                    <a href=" "><img src="images/category4.jpg"></a>
                </div>
            </div>
        </div>

        <div class="small-container">
            <h2 class="title">Best Seller</h2>
            <div class="row">

                <div class="col-4">
                    <img src="images/product-one.png">
                    <h4>Red Polo Collar T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-2.jpg">
                    <h4>Black HRX Track Sneakers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-3.jpg">
                    <h4>Grey Sweatpants</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-four.png">
                    <h4>Blue NBA Trainers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="small-container">
            <h2 class="title">Brand New</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/product-5.jpg">
                    <h4>Sliver Hightops Sneakers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-6.jpg">
                    <h4>Black Stylish T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-7.jpg">
                    <h4>HRX Cotton Socks</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-8.jpg">
                    <h4>Fossil Time Piece</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-9.jpg">
                    <h4>Simple Watch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-10.jpg">
                    <h4>Black & Red Sneakers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-11.jpg">
                    <h4>Grey Fidelity Shoe</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="col-4">
                    <img src="images/product-12.jpg">
                    <h4>Black Sweetpants</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial">
            <div class="small-container">
                <div class="row">

                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti consequuntur eveniet
                            beatae aperiam qtque? Voluptate quae nihil numquam expedita nisi.
                        </p>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>

                        <img src="images/user-1.png">

                        <h3>Lucy Bemana</h3>
                    </div>

                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti consequuntur eveniet
                            beatae aperiam qtque? Voluptate quae nihil numquam expedita nisi.
                        </p>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>

                        <img src="images/user-2.png">

                        <h3>Brian Stacy</h3>
                    </div>

                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti consequuntur eveniet
                            beatae aperiam qtque? Voluptate quae nihil numquam expedita nisi.
                        </p>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>

                        <img src="images/user-3.png">

                        <h3>Betty Jane</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png" />
                    </div>

                    <div class="col-5">
                        <img src="images/logo-oppo.png" />
                    </div>

                    <div class="col-5">
                        <img src="images/logo-coca-cola.png" />
                    </div>

                    <div class="col-5">
                        <img src="images/logo-paypal.png" />
                    </div>

                    <div class="col-5">
                        <img src="images/logo-philips.png" />
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
