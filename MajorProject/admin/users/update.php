<?php 
    require_once('./index.php');
    require_once('../db/dbhelper.php');
    $id=$_GET['id'];
    $sql="select*from users where id = '$id'";
    $result = executeResult($sql);
    foreach($result as $item) {

?>
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Update User</h2>
			</div>
			<div class="panel-body">
				<form action="./users/process_update.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="fullname">Full Name:</label>
					  <input required="true" type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $item['fullname']?>">
                      <input type="hidden" name="id" value="<?php echo $item['id']?>">
					</div>
					<div class="form-group">
					  <label for="username">Username:</label>
					  <input required="true" type="text" class="form-control" id="username" name="username" value="<?php echo $item['username']?>">
					</div>
					<div class="form-group">
					  <label for="password">Password:</label>
					  <input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="form-group">
					  <label for="phonenumber">Phone number:</label>
					  <input required="true" type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $item['phonenumber']?>">
					</div>
					<button class="btn btn-add">Save</button>
				</form>
			</div>
		</div>
	</div>
    <?php 
    }
    ?> 