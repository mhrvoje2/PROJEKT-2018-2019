<?php 
session_start();
print '
<!DOCTYPE html>
<html>
	<head>
		
		
		<link rel="stylesheet" href="style.css">
	
	
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<title>HTML5</title>
	</head>
<body>
	<header>
		<figure>
<img src="news.jpeg"alt="moja slika"width="300%" height="300";>
</figure> 
		<nav>
			<ul>
				<li><a href="index.php?menu=1">Home</a></li>
				<li><a href="index.php?menu=2">Novosti</a></li>
				<li><a href="index.php?menu=3">Kontakt</a></li>
				<li><a href="index.php?menu=4">O nama</a></li>
				<li><a href="index.php?menu=5">Galerija</a></li>';
				if (isset($_SESSION['username'])) {print '<li><a href="index.php?menu=7">Logout</a></li>';}
					else {print '<li><a href="index.php?menu=6">LogIn</a></li>';}
				print'
			</ul>
		</nav>
	</header>
	<main>';
		
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
	
	# News
	else if ($_GET['menu'] == 2) { include("Novosti.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("Kontakt.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("O nama.php"); }
	# Galerija
	else if ($_GET['menu'] == 6) { include("login.php"); }
	# Logiranje
	else if ($_GET['menu'] == 5) { include("galerija.php"); }
	#Odlogiranje
	else if ($_GET['menu'] == 7) { session_destroy(); echo 'Sad ste izlogirani'; header('refresh:3; url=http://127.0.0.1/mhrvojevic/mhrvojevic/index.php'); }

	print '
	</main>
	<footer>
		<p>Copyright &copy; 2018 Milan Hrvojević</p>
	</footer>
</body>
</html>';
if (isset($_SESSION['username'])) {
echo 'Vi ste:' .$_SESSION['username'];}
?>