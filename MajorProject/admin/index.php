<?php
require_once('../db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products Manage</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
</thead>
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:160px;">
	<a href="#" class="w3-bar-item w3-button">Link 1</a>
  <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Product <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
    <a href="index.php?page=index" class="w3-bar-item w3-button">Index</a>
    <a href="index.php?page=add" class="w3-bar-item w3-button">Create</a>
  </div>

  <div class="w3-dropdown-click">
    <button class="w3-button" onclick="myDropFunc()">User <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card">
      <a href="index.php?page1=index" class="w3-bar-item w3-button">Index</a>
      <a href="index.php?page1=add" class="w3-bar-item w3-button">Create</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
	</div>
	<div class="w3-container" style="margin-left:160px">
	<div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./images/logo-neww-removebg-preview.png" width="252px" />
                </div>          
            </div>
        </div>
    </div>

	<?php 
	if(isset($_GET['page'])){                   
		$page = $_GET['page'];                   
		$file = './products/'.$page.'.php';                   
		require($file);                                   
	 }
	if(isset($_GET['page1'])){                   
		$page = $_GET['page1'];                   
		$file = './users/'.$page.'.php';                   
		require($file);                                   
	 }
	?>
			</div>
	<script>
	function myAccFunc() {
	var x = document.getElementById("demoAcc");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-green";
	} else { 
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className = 
		x.previousElementSibling.className.replace(" w3-green", "");
	}
	}

	function myDropFunc() {
	var x = document.getElementById("demoDrop");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-green";
	} else { 
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className = 
		x.previousElementSibling.className.replace(" w3-green", "");
	}
	}
	</script>
</body>
</html>