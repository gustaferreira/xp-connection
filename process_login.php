<?php
include("conecta.php");

$login = $_POST["login"];
$senha = $_POST["senha"];


try {
	
	$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `senha` = '$senha'";
	

	$res = $conn->query($sql)->fetchAll();

	if(count($res) > 0) {
        foreach ($res as $row) {
            $id = $row['id'];
			$login = $row['login'];
			$nivel = $row['nivel'];

        }

		if(!isset($_SESSION)) 
			session_start();
		
		$_SESSION["id_usuario"] = $id;
		$_SESSION["login"] = $login;
		$_SESSION["nivel"] = $nivel;

		header("Location:logado.php");
    }
  	
  	else {
        header("Location:login.php");

                   
}

} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


    
?>