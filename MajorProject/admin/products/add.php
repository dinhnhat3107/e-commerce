<?php 
   require_once('./index.php');
?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add a Product</h2>
			</div>
			<div class="panel-body">
				<form action="process_add.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="name">Title:</label>
					  <input required="true" type="text" class="form-control" id="title" name="title" >
					</div>
					<div class="form-group">
					  <label for="price">Price:</label>
					  <input required="true" type="text" class="form-control" id="price" name="price">
					</div>
					<div class="form-group">
					  <label for="thumbnail">Thumbnail:</label>
					  <input required="true" type="file" class="form-control" id="thumbnail" name="thumbnail" >
					</div>
					<div class="form-group">
					  <label for="content">Description:</label>
					  <textarea class="form-control" rows="5" name="description" id="description"></textarea>
					</div>
					<button class="btn btn-add">Save</button>
				</form>
			</div>
		</div>