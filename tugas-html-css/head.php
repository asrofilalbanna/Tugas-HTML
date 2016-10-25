<?php namespace progres;

include 'sql/koneksi.php'; 
// include 'tambah.php';
// include 'hapus.php';
include 'sql/tampil.php';
include 'sql/ubah.php';
// include 'ubah.php';

use connect; 
// use create; 
use read;
// use more;
use update;
// use delete;

// instance objek db
$db = new connect\koneksi;

// koneksi ke MySQL via method
$db->connectMySql();
@ $hal = $_GET['hal'];
if (!isset($hal)) {
	header('location:home.php?hal=artikel');
}
?>

<!DOCTYPE html>
<html lang="en"><!-- Awal HTML -->

<head>
	<title> Cleaveland Browns</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="icon" type="image/x-icon" href="image/icon-cleveland-browns-2.gif" />
</head> <!-- Akhir HEAD -->

<header>
<!--  Header pembungkus  -->
<div id="container_head">

<!-- Logo 1-->
	<div id="logo1" title="CLEVELAND Browns"></div>


<!-- Navbar -->
	<nav>
		<ul>
			<li><a href="about.php?hal=about">about</li></a>
			<li><a href="stadium.php?hal=stadium">stadium</li></a>
			<li><a href="">news</li></a>
			<li><a href="gallery.php?hal=gallery">gallery</li></a>
			<li><a href="home.php?hal=artikel">home</li></a>
		</ul>
	</nav>
	
<!-- Logo 2 -->
	<div id="logo2" title="CLEVELAND Browns"></div>
	
	<div class="clearfix"></div>


</div>



</header>

<body><!-- Awal BODY -->