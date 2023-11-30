<?php
require_once ('../db/dbhelper.php');

        $id = $_POST['id'];

		$fullname = $_POST['fullname'];

		$username = $_POST['username'];
	
		$password = $_POST['password'];	

		$phonenumber = $_POST['phonenumber'];	
		
		$sql = "update users set fullname ='$fullname', phonenumber ='$phonenumber', username ='$username', password ='$password' where id ='$id'";

		execute($sql);

		header('Location: ../index.php?page1=index');
		
	

