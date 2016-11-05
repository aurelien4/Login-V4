<?php 	
	if(isset($_POST['log']) OR isset($_POST['pass'])){
		include "database.php";
		if(strlen($_POST['log']) >= 4 AND strlen($_POST['pass']) >= 4){	
			$verification = $dbh->prepare('SELECT * FROM users WHERE login = ?');
			$verification->execute(array($_POST['log']));
			$data = $verification->fetch();
			if($data['login'] != $_POST['log'] OR !password_verify($_POST['pass'], $data['password'])){
				echo "login ou password inscorect";
				
			}else{
				echo "Bonjour !";
			}
		}else{
			echo "fail longeur de champ";
		}
	}else{
		echo "fail variable non existante";
	}

	

 ?>
