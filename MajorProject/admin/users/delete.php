<?php
	require_once ('../db/dbhelper.php');
					$id = $_GET['id'];
					;
					$sql = 'delete from users where id = '.$id;
					execute($sql);
					header('Location: index.php');
					

					
	