	<?php 
    require_once('./index.php');
	require_once('../db/dbhelper.php');
	?>
	<h2 class="title">Manage Products</h2>
     <table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th width="50px">ID</th>
				<th width="150px">Full Name</th>
				<th>Username</th>
				<th>Phone Number</th>
				<th width="50px"></th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql  = 'select * from users';
			$userList = executeResult($sql);
			
			$index = 1;
			foreach ($userList as $item) { 
		?>
		<tr>
			<td><?php echo $index++ ?></td>
			
			<td><?php Echo $item['fullname']?></td>
			<td><?php Echo $item['username']?></td>
			<td><?php Echo $item['phonenumber']?></td>
			<td>
				<a href="index.php?page1=update&id=<?php echo $item['id']?>"><button class="btn btn-edit">Edit</button></a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $item['id']?>"><button class="btn btn-delete">Delete</button></a>
			</td>
		</tr>
	<?php } 
	?>	
	<div class="btn">
	<a href="../HomePage.php">
	<button class="btn btn-home" style="margin-bottom: 20px;">Powers Sport</button>
	</a>
	<a href="add.php">
	<button class="btn btn-add" style="margin-bottom: 20px;">Add a product</button>
	</a>