<?php
	try{
		$conexao = new PDO('mysql:host=sql310.epizy.com;dbname=epiz_23556888_jklasukcadsfasc', 'epiz_23556888', 'tYXIF6zMucoYxI');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
?>