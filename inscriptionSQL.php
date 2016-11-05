<?php 
if(isset($_POST['log']) && isset($_POST['pass']) && isset($_POST['pass2'])){
	$log = htmlspecialchars($_POST['log']);
	$pass = htmlspecialchars($_POST['pass']);
	$pass2 = htmlspecialchars($_POST['pass2']);
	if(strlen($log) <= 5 OR strlen($pass) <= 5){
		echo 'longeur de champ insufisante';
	}else{
		if($pass == $pass2){
			$pass = password_hash($pass, PASSWORD_DEFAULT);
			include "database.php";
			$envoie = $dbh->prepare('INSERT INTO users (login, password, date_inscription) VALUES(:log, :pass, NOW())');
			$envoie->execute(array(
				'log' => $log,
				'pass' => $pass
				));
			echo  'Merci de votre inscription' ;
		}		
	}

}else{
	echo 'erreur d\'envoie de donnée recharger la page.';
}




 ?>
