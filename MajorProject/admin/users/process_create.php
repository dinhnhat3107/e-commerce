<?php
require_once ('../db/dbhelper.php');


		$fullname = $_POST['fullname'];

		$username = $_POST['username'];
	
		$password = $_POST['password'];	

		$phonenumber = $_POST['phonenumber'];	
		
		$sql = 'insert into users(fullname, username, password, phonenumber) values ("'.$fullname.'", "'.$username.'", "'.$password.'", "'.$phonenumber.'")';

		execute($sql);

		header('Location: ../index.php?page1=index');
		
	



