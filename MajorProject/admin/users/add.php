<?php 
    require_once('./index.php');
?>
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Creat a user</h2>
			</div>
			<div class="panel-body">
				<form action="./users/process_create.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="fullname">Full Name:</label>
					  <input required="true" type="text" class="form-control" id="fullname" name="fullname">
					</div>
					<div class="form-group">
					  <label for="username">Username:</label>
					  <input required="true" type="text" class="form-control" id="username" name="username">
					</div>
					<div class="form-group">
					  <label for="password">Password:</label>
					  <input required="true" type="password" class="form-control" id="password" name="password">
					</div>
					<div class="form-group">
					  <label for="phonenumber">Phone number:</label>
					  <input required="true" type="text" class="form-control" id="phonenumber" name="phonenumber">
					</div>
					<button class="btn btn-add">Save</button>
				</form>
			</div>
		</div>
	</div>