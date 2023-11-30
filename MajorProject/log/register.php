<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="../log/css.css" />
    <link rel="stylesheet" href="../style.css" />
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
                    <img src="../images/logo-neww-removebg-preview.png" width="252px" />
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="../HomePage.php">Home</a></li>
                        <li><a href="../product.html">Products</a></li>
                        <li><a href="../inf.html">About</a></li>
                        <li><a href="https://www.facebook.com/dinhnhat.3107">Contact</a></li>
                    </ul>
                </nav>        
        </div>
        </div>
    </div>
    <div id="register-form">
        <h2>Register your Account</h2>
        <form action="reg.php" method="post">
          <label for="fullname">Full name:</label>
          <input type="text" id="fullname" name="fullname" required>
          <label for="username">User name:</label>
          <input type="text" id="username" name="username" required>
          <label for="password">Mật khẩu:</label>
          <input type="password" name="password" id="password">
          <label for="email">Email:</label>
          <input type="text" id="email" name="email" required>
          <label for="phonenumber">Phone number:</label>
          <input type="text" id="phonenumber" name="phonenumber" required>
          <input type="submit" value="Register">
          
          <div class="error">
            <!-- Display error message here if login is unsuccessful -->
        </form>
        </div>
	</div>
        </div>
      </div>
  </body>
</html>