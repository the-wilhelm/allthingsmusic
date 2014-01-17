<?php
switch($_GET['q']){
	case 'home':
        $page = 'home';
		$url = 'pages/home.php';
		break;
    
    case 'about':
        $page = 'about';
		$url = 'pages/about.php';
		break;
    
    case 'bio':
        $page = 'bio';
		$url = 'pages/bio.php';
		break;
    
    case 'tuition':
        $page = 'tuition';
		$url = 'pages/tuition.php';
		break;
    
    case 'contact':
        $page = 'contact';
		$url = 'pages/contact.php';
		break;
		
	default:
        $page = 'home';
		$url = 'pages/home.php';
}

include 'pages/header.php';
include $url;
include 'pages/footer.php';
?>