<?php
if(isset($_REQUEST['sair'])){	
	session_destroy();
	session_unset($_SESSION['usuariowva']);
	session_unset($_SESSION['senhawva']);	
	header("Location: index.php");	
}
?>