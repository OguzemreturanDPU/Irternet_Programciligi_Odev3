<?php
	setcookie('kullanici_adi', '', time() - 60*60*24, '/');

	header('Location: index.php');
?>