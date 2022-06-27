<?php 
require_once("./assets/php/config.php");
session_start(); 
if($_SESSION["loggedin"] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Sole Dreams | Home</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<video class="bg-video" playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
		<source src="./videos/attract.mp4" type="video/mp4">
	</video>
	<!-- Wrapper -->
	<nav id="menu">
		<h2>Sole Dreams Shop</h2>
        <?php if ($loggedin == false) {?>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="generic.php">Shop</a></li>
			<li><a href="login.php">Log In</a></li>
			<li><a href="signup.php">Sign Up</a></li>
			<li><a href="elements.php">Elements</a></li>
		</ul>
        <?php } else {?>
            <ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="generic.php">Change Password</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
        <?php 
        }
        ?>
	</nav>
	<div class="viewport-header">
		<div id="wrapper">
			<div class="box fullpage opaque">
				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
						<p style="text-align:center;">
						<a href="index.html" class="logo">
							<span class="symbol"><img src="images/logo.svg" alt="" /></span><span
								class="title" style="color:white;text-align: center;">Sole Dreams</span>
						</a>
						</p>
						<!-- Nav -->
						<nav>
							<ul>
								<li><a href="#menu">Menu</a></li>
							</ul>
						</nav>
						<header>
							<h1 style="font-size:5em;color:white; text-align:center;">Step up your game!</h1>
							<p style="font-size:3em;font-weight:520;color:white; text-align:center;">Kicks meant for all terrains and ambitions.</p>
							<p style="text-align:center;color:white;"><button onclick="viewtiles()"class="button large tohide" >SHOP NOW</button></p>
							<script>
								function viewtiles() {
								document.getElementById("tileview").scrollIntoView({behavior:"smooth"});
							}
							</script>
						</header>
					</div>
				</header>
			</div>
			<!-- Menu -->

			<!-- Main -->
			<div id="main">
				<div id="tileview" class="inner">
					<section class="tiles">
						<article class="style1">
							<span class="image">
								<img src="images/tileview/snkr-section.jpg" alt="" />
							</span>
							<a href="snkr.php">
								<h2>Stylin'</h2>
								<div class="content">
									<p class="tilep">Style on them, new shoes for ballin', or just casual rollin'</p>
								</div>
							</a>
						</article>
						<article class="style2">
							<span class="image">
								<img src="images/tileview/trek-section.jpg" alt="" />
							</span>
							<a href="generic.html">
								<h2>Trekkin'</h2>
								<div class="content">
									<p class="tilep">We have heavy duty, absolute units for going against the odds!</p>
								</div>
							</a>
						</article>
						<article class="style3">
							<span class="image">
								<img src="images/tileview/formal-section.jpg" alt="" />
							</span>
							<a href="">
								<h2>Formal</h2>
								<div class="content">
									<p class="tilep">Feeling a little corporate? When we say business, we mean business.</p>
								</div>
							</a>
						</article>
						<article class="style4">
							<span class="image">
								<img src="images/tileview/featured-section.jpg" alt="" />
							</span>
							<a href="generic.html">
								<h2>Featured</h2>
								<div class="content">
									<p class="tilep">Check out our top picks!</p>
								</div>
							</a>
						</article>
						<article class="style5">
							<span class="image">
								<img src="images/tileview/new-section.jpg" alt="" />
							</span>
							<a href="generic.html">
								<h2>New Steps</h2>
								<div class="content">
									<p class="tilep">New arrival, hurry before they get out of stock!</p>
								</div>
							</a>
						</article>
						<article class="style6">
							<span class="image">
								<img src="images/tileview/others-section.jpg" alt="" />
							</span>
							<a href="generic.html">
								<h2>Other Products</h2>
								<div class="content">
									<p class="tilep">Stay up to speed with our other fashion weapons.</p>
								</div>
							</a>
						</article>
					</section>
				</div>
			</div>

			<!-- Footer -->
			<div class="box fullpage">
				<footer id="footer">
					<div class="inner" style="background-color:white;">
						<section>
							<h2>Get in touch</h2>
							<form method="post" action="#">
								<div class="fields">
									<div class="field half">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send" class="primary" /></li>
								</ul>
							</form>
						</section>
						<section>
							<h2>Follow</h2>
							<ul class="icons">
								<li><a href="#" class="icon brands style2 fa-twitter"><span
											class="label">Twitter</span></a>
								</li>
								<li><a href="#" class="icon brands style2 fa-facebook-f"><span
											class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands style2 fa-instagram"><span
											class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands style2 fa-dribbble"><span
											class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon brands style2 fa-github"><span
											class="label">GitHub</span></a>
								</li>
								<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a>
								</li>
								<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a>
								</li>
								<li><a href="#" class="icon solid style2 fa-envelope"><span
											class="label">Email</span></a>
								</li>
							</ul>
						</section>
						<ul class="copyright" style="text-align:center;color:black;">
							<li>&copy; Untitled. All rights reserved</li>
							<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>