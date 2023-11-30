<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            </a>
        </div>
        </div>
        </div>
    </div>
    <div class="small-container">
        <h2 class="title">Best Seller</h2>
        <div class="row">
            <?php
            require_once ('./db/dbhelper.php');
            $con = mysqli_connect("localhost",'root', "", "majorproject");
            $sql= 'select * from products';
            $result = mysqli_query($con, $sql);
            foreach($result as $item) {

            
            ?>
                <div class="col-4">
                <img src="admin/images/<?php echo $item['thumbnail']?>">
                <h4><?php echo $item['title']?></h4>
                <h4 style="color:red">$<?php echo $item['price']?></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
            <?php
            }
            ?>
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