<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casaluna design</title>
	<link rel="icon" type="image/jpg" href="images/casalunalogo.jpg" sizes="96x96">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
        .checked {
  color: orange;
}
        </style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 text-left menu-1">
								<ul>
									<li><a href="../index.php">Home</a></li>
									<li class="has-dropdown" >
										<a href="blog.html">Articles de décos</a>
										<ul class="dropdown">
											<li><a href="#">Ambiance Chic</a></li>
											<li><a href="#">Ambiance Moderne</a></li>
											<li><a href="#"> Ambiance Contemporene</a></li>
											<li><a href="#">Ambiance Bohemiene</a></li>
										</ul>

									<li class="has-dropdown">
										<a href="about.html">Accessoires</a>
										<ul class="dropdown">
											<li><a href="#">Bracelets</a></li>
											<li><a href="#">Colier</a></li>
											<li><a href="#">Couronne</a></li>
										</ul>
										<li class="has-dropdown active">
										<a href="avis.php">Avis</a>
										<ul class="dropdown">
											<li><a href="offre.html" target="_blank">Offres</a></li>
											<li><a href="#">Promotion</a></li>
										</ul>
									</li>
								
							</div>
							<div class="col-sm-5">
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center menu-2">
					  <div id="fh5co-logo">
            <h1>
              <a href="index.html">
            
            <img src="../images/casa.png"  height="200" width="200">
              </a>
            </h1>
          </div>
					</div>
				</div>
			</div>
		</div>
	</nav>


	<?PHP
include "../entities/suggestion.php";
include "../core/suggestionC.php";
include"../config.php";
if (isset($_GET['numSuggestion'])){
	$suggestionC=new suggestionC();
    $result=$suggestionC->recupererSuggestion($_GET['numSuggestion']);
	foreach($result as $row){
		$numSuggestion=$row['numSuggestion'];
		$idUtilisateur=$row['idUtilisateur'];
		$date=$row['date'];
		$localisation=$row['localisation'];
		$Service=$row['Service'];
		$noteService=$row['noteService'];
		$serviceGlobal=$row['serviceGlobal'];


?>

	<div id="fh5co-instagram">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Modifier Votre Suggestion</span></h2>
				</div>
			</div>
		</div>
		<center>

<form method="POST">
<table>

<tr>

<td><input type="number" name="numSuggestion" value="<?PHP echo $numSuggestion ?>" hidden></td>
</tr>
<tr>

<td><input type="number" name="idUtilisateur" value="<?PHP echo $idUtilisateur ?>" hidden></td>
</tr>
<tr>

<td><input type="Date" name="date" value="<?PHP echo $date ?>" hidden></td>
</tr>
<tr>
<td>localisation</td>
<td><input type="text" name="localisation" value="<?PHP echo $localisation ?>" required pattern="[A-Za-z].{4,}" x-moz-errormessage="la localisation dois etre alphabetique"></td>
</tr>
<tr>

<td><input type="text" name="Service" value="<?PHP echo $Service ?>" hidden></td>
</tr>
<tr>
<td>noteService</td>
<td><input type="number" name="noteService" value="<?PHP echo $noteService ?>"></td>
</tr>
<tr>
<td>Satisfaction Du Service Global</td>
<td><input type="number" name="serviceGlobal" value="<?PHP echo $serviceGlobal ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
<td><a href="suggestion.php" class="btn btn-primary">Afficher</a></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="numSuggestion_ini" value="<?PHP echo $_GET['numSuggestion'];?>"></td>
</tr>
</table>
</form>
        
        
        
        </center>
      </div>

<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Suggestion=new Suggestion($_POST['numSuggestion'],$_POST['idUtilisateur'],$_POST['date'],$_POST['localisation'],$_POST['Service'],$_POST['noteService'],$_POST['serviceGlobal']);
	$suggestionC->modifierSuggestion($Suggestion,$_POST['numSuggestion_ini']);
	
}

?>

		
	


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Paper</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-4 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://freehtml5.co">FreeHTML5.co</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>Qui sommes nous ?	</p>					
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.google.com/maps/place/Casaluna+Design/@36.8711008,10.3360315,17z/data=!3m1!4b1!4m5!3m4!1s0x12e2b568d9a756ef:0x61d226fbc2c1f5d1!8m2!3d36.8710965!4d10.3382202" target="_blank"><i class="icon-location"></i></a></li>
							<li><a href="https://www.facebook.com/Casaluna-Design-334212177167837/" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/casalunadesign/?hl=fr" target="_blank"><i class="icon-instagram"></i></a></li>
							
							
						</ul>

					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>

