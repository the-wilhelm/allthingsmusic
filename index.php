<?php
include 'pages/header.php';

switch($_GET['q']){
	case 'home':
		include 'pages/home.php';
		break;
		
	default:
		include 'pages/home.php';
}

include 'pages/footer.php';
?>