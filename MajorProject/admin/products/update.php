<?php 
    require_once('./index.php');
    require_once('../db/dbhelper.php');
    $id=$_GET['id'];
    $sql="select*from products where id = '$id'";
    $result = executeResult($sql);
    foreach($result as $item) {

?>
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Update Product</h2>
			</div>
			<div class="panel-body">
				<form action="./products/process_update.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="name">Title:</label>
					  <input required="true" type="text" class="form-control" id="title" name="title" value="<?php echo $item['title']?>">
					  <input type="hidden" name="id" value="<?php echo $item['id']?>">
					</div>
					<div class="form-group">
					  <label for="price">Price:</label>
					  <input required="true" type="text" class="form-control" id="price" name="price" value="<?php echo $item['price']?>">
					</div>
					<div class="form-group">
					  <label for="thumbnail">Thumbnail:</label>
					  <input type="file" class="form-control" id="thumbnail" name="thumbnail">
					  <input type="hidden" value="<?php echo $item['thumbnail']?>" name="oldthumbnail">
					  <img src="./images/<?php echo $item['thumbnail']?>" alt="" style="width: 100px;" >
					</div>
					<div class="form-group">
					  <label for="description">Description:</label>
					  <textarea class="form-control" rows="5" name="description" id="description" style="text-align: left">
					  <?php echo $item['description']?>		
					  </textarea>
					</div>
					<button class="btn btn-add">Save</button>
				</form>
			</div>
	</div>
    <?php 
    }
    ?> 