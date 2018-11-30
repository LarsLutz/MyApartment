<?php
include "isuser.php";
include 'db.php';
include "autologout.php";
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Einstellungen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
         
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">MyApartment</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
                                                    <li><a href="index.php">Home</a></li>
							<li><a href="test.php">Edu</a></li>
                                                        <li><a href="test.php">Skippy</a></li>
							<li><a href="elements.php">Elements</a></li>
                                                        <li><a href="userconf.php">Einstellungen</a></li>
                                                        <li><a href="logout.php"><b>Logout</b></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Einstellungen</h1>
                                                        
                                                    <div class="confbox1">
                                                        <form name="pwchange" action="pwchange.php" method="post">
                                                          <h2>Passwort &auml;ndern</h2>
                                                          <label><?php echo $_SESSION['ErrorMSG1']; ?></label>
                                                          <input type="password" name="passwordold" id="passwordold" value="" placeholder="Altes Passwort" tabindex="1" />
                                                         <label  id="msgpwold"></label>
                                                          <input type="password" name="passwordnew" id="passwordnew" value="" placeholder="Neues Passwort" tabindex="2" />
                                                          <input type="password" name="passwordnewag" id="passwordnewag" value="" placeholder="Neues Passwort wiederholen" tabindex="3" />
                                                          <br>
                                                          <span class="loginbutton">
                                                              <input type="submit" name="pwok" value="Ok" class="primary" tabindex="4"/>
                                                              <input type="reset" value="Abbrechen" tabindex="4" />
                                                          </span>
                                                      </form>
                                                        
                                                    </div>
                                                        
                                                         <div class="confbox2">
                                                             <form name="mailchange" action="mailchange.php" method="post">
                                                                <h2>Email Adresse &auml;ndern</h2>
                                                                <label><?php echo $_SESSION['ErrorMSG2']; ?></label>
                                                                <input type="text" name="newemail" id="newemail" value="" placeholder="Neue Mail Adresse" tabindex="1" />
                                                                <label  id="msgemail"></label>
                                                                <br>
                                                                
                                                                <span class="loginbutton">
                                                                    <input type="submit" name="mailok" value="Ok" class="primary" tabindex="2"/>
                                                                    <input type="reset" value="Abbrechen" tabindex="3" />
                                                                </span>  
                                                             </form>
                                                    </div>
                                                        
                                                         <div class="confbox3">
                                                             <form name="login" action="namechange.php" method="post">
                                                          <h2>Username &auml;ndern</h2>
                                                                <label><?php echo $_SESSION['ErrorMSG3']; ?></label>
                                                                <input type="text" name="newname" id="newname" value="" placeholder="Neuer Username" tabindex="1" />
                                                                <br>
                                                                <span class="loginbutton">
                                                                    <input type="submit" name="nameok" value="Ok" class="primary" tabindex="2"/>
                                                                    <input type="reset" value="Abbrechen" tabindex="3" />
                                                                </span>
                                                      </form>
                                                        
                                                    </div>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Kontakt</h2>
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
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design:Lars Lutz</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
                        <script src="assets/js/formcheckconfig.js"></script>
                        
                        
                        

	</body>
         
</html>

<?php
include_once 'dbclose.php';
$_SESSION['ErrorMSG1']="";
$_SESSION['ErrorMSG2']="";
$_SESSION['ErrorMSG3']="";
?>