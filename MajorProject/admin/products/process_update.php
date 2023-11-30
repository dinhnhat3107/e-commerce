<?php
require_once ('../db/dbhelper.php');
		
		$id = $_POST['id'];
		
		$title = $_POST['title'];

		$price = $_POST['price'];

		$thumbnail = $_FILES['thumbnail'];	

		$oldthumbnail = $_POST['oldthumbnail'];

		$description = $_POST['description'];
		if ($thumbnail['size'] > 0){
			$folder = '../images/';
			$file_extension = explode('.',$thumbnail['name'])[1];
			$file_name = time() . '.' . $file_extension;
			$path_file = $folder . $file_name;
			echo $path_file. $file_extension;
			// die;
			move_uploaded_file($thumbnail["tmp_name"],$path_file);
			
			$sql = "update products set title ='$title', price ='$price', thumbnail ='$file_name', description ='$description' where id ='$id'";

			execute($sql);
		}
		else {
			$sql = "update products set title ='$title', price ='$price', thumbnail ='$oldthumbnail', description ='$description' where id ='$id'";

			execute($sql);
		}



		header('Location: ../index.php?page=index');
		
	

