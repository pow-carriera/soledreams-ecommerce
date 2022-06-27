<?php
require_once("./assets/php/config.php");
session_start();
if ($_SESSION["loggedin"] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
} ?>
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
    <!-- Wrapper -->
    <nav id="menu">
        <h2>Sole Dreams Shop</h2>
        <?php if ($loggedin == false) { ?>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="generic.php">Shop</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="elements.php">Elements</a></li>
            </ul>
        <?php } else { ?>
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
                        <nav>
                            <ul>
                                <li><a href="#menu">Menu</a></li>
                            </ul>
                        </nav>
                        <div id="tileview" class="inner">
                            <h1>Sneaker Section</h1>
                            <section class="tiles" style="width:70%;">
                                <article class="style1">
                                    <span>
                                        <img src="images/tileview/snkr-section.jpg" alt="" />
                                    </span>
                                    <a href="snkr.php">
                                        <h2>Stylin'</h2>
                                        <div>
                                            <p>Add to Cart</p>
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
                </header>
            </div>
            <!-- Menu -->
            <!-- Main -->

            <!-- Footer -->

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