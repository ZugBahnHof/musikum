<?php
@session_start();
$_SESSION['color1'] = $site_color_html;
if ( isset( $_GET['msg'] ) ) {
	$modal      = true;
	$modal_text = $_GET['msg'];
} else {
	$modal = false;
}
if ( $modal ) {
	$toast = "M.toast({html: '$modal_text'})";
} else {
	$toast = "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html">
	<meta charset="utf-8">
	<title>musikum e.v. luebeck</title>
	<meta name="author" content="Helga Reihl">
	<meta name="publisher" content="musikum e.V.">
	<meta name="copyright" content="musikum e.V.">
	<meta name="description" content="musikum e.V. - die freundliche
	Musikschule in der Lübecker Altstadt. Instrumentalunterricht für
	Kinder , Jugendliche und Erwachsene, Musikalische Früherziehung,
	Ensembles, Musikfreizeiten und vieles mehr.">
	<meta name="keywords" content="Blockflöte, Klarinette, Saxophon,
	Trompete, Posaune, Geige, Cello, Gitarre, Unterricht,
	Musikalische, Früherziehung, Orchester, Musikfreizeiten, Drum,
	Circle, Lübeck, Musik-Karusell, Musikalische, Krabbelgruppe,
	Schnupperkurs, Kurs, Workshop, Musik, ">
	<meta name="page-topic" content="Bildung">
	<meta name="audience" content="Studenten">
	<meta http-equiv="content-language" content="de">
	<meta name="robots" content="index, follow">
	<meta name="DC.Creator" content="Helga Reihl">
	<meta name="DC.Publisher" content="musikum e.V.">
	<meta name="DC.Rights" content="musikum e.V.">
	<meta name="DC.Description" content="musikum e.V. - die freundliche
	Musikschule in der Lübecker Altstadt. Instrumentalunterricht für
	Kinder , Jugendliche und Erwachsene, Musikalische Früherziehung,
	Ensembles, Musikfreizeiten und vieles mehr.">
	<meta name="DC.Language" content="de">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.php">

	<!-- Import JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function () {
		$(".button-collapse").sidenav();
		$('.sidenav').sidenav();
		$('.materialboxed').materialbox();
		$('.tooltipped').tooltip();
		$('.modal').modal();
		<?= $toast?>
	});
	</script>

</head>
<body class="<?php echo $site_color?>">
	<header>
		<div class="navbar-fixed">
			<nav class="nav-extended white">
				<div class="nav-wrapper container" style="margin-bottom: 5px;">
					<a href="index.php" class="brand-logo"><img src="images/logo.jpg" alt="Logo" height="60px"></a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="" class="black-text">Impressum</a></li>
						<li><a href="" class="black-text">Kontakt</a></li>
						<li><a href="" class="black-text">Fotos</a></li>
					</ul>
				</div>
				<div class="nav-content container hide-on-med-and-down">
					<ul class="tabs tabs-transparent">
						<li class="tab"><a href="index.php" class="black-text <?php echo $a1;?>">Startseite</a></li>
						<li class="tab"><a href="ueber_uns.php" class="black-text <?php echo $a2;?>">Über uns</a></li>
						<li class="tab"><a href="termine.php" class="black-text <?php echo $a3;?>">Termine</a></li>
						<li class="tab"><a href="angebote.php" class="black-text <?php echo $a4;?>">Angebote</a></li>
						<li class="tab"><a href="#test5" class="black-text <?php echo $a5;?>">Team</a></li>
						<li class="tab"><a href="#test6" class="black-text <?php echo $a6;?>">Kooperationen</a></li>
						<li class="tab"><a href="#test7" class="black-text <?php echo $a7;?>">Räume mieten</a></li>
						<li class="tab"><a href="#test8" class="black-text <?php echo $a8;?>">Mitglied werden</a></li>
						<li class="tab"><a href="#test9" class="black-text <?php echo $a9;?>">Spenden</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<ul class="sidenav" id="mobile-demo">
			<li><a href="index.php" class="<?php echo $a1;?>"><?php echo $r1;?>Startseite</a></li>
			<li><a href="ueber_uns.php" class="<?php echo $a2;?>"><?php echo $r2;?>Über uns</a></li>
			<li><a href="termine.php" class="<?php echo $a3;?>"><?php echo $r3;?>Termine</a></li>
			<li><a href="angebote.php" class="<?php echo $a4;?>"><?php echo $r4;?>Angebote</a></li>
			<li><a href="#!" class="<?php echo $a5;?>"><?php echo $r5;?>Team</a></li>
			<li><a href="#!" class="<?php echo $a6;?>"><?php echo $r6;?>Kooperationen</a></li>
			<li><a href="#!" class="<?php echo $a7;?>"><?php echo $r7;?>Räume mieten</a></li>
			<li><a href="#!" class="<?php echo $a8;?>"><?php echo $r8;?>Mitglied werden</a></li>
			<li><a href="#!" class="<?php echo $a9;?>"><?php echo $r9;?>Spenden</a></li>
		</ul>
	</header>
	<main>
