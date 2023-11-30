<?php
require_once ('../db/dbhelper.php');


		$title = $_POST['title'];

		$price = $_POST['price'];
	
		$thumbnail = $_FILES['thumbnail'];	

		$description = $_POST['description'];

        $folder = 'images/';
        $file_extension = explode('.',$thumbnail['name'])[1];
        $file_name = time() . '.' . $file_extension;
        $path_file = $folder . $file_name;
        echo $path_file. $file_extension;
        move_uploaded_file($thumbnail["tmp_name"],$path_file);
        
		$sql = 'insert into products(title, price, thumbnail, description) values ("'.$title.'", "'.$price.'", "'.$file_name.'", "'.$description.'")';

		execute($sql);

		header('Location: index.php');
	



