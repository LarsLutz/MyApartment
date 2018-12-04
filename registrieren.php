<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
            <title>Registrieren</title>
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
                                                                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Registrieren</span>
								</a>

							

						</div>
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
                                                    <h1>Geben Sie bitte ihre Daten ein.</h1>
                                                        
                                                    <div class=" regbox">
                                                        <form name="login" action="reg.php" method="post">
                                                          <input type="text" name="usernr" id="usernr" value=""  placeholder="Anmelde Nummer" tabindex="1" maxlength="8" />
                                                          <label  id="msgid"></label>
                                                        <br>
                                                        <input type="text" name="regusername" id="regusername" value=""  placeholder="Username" tabindex="2" maxlength="32" />
                                                         <label  id="msgreuser"></label>
                                                        <br>
                                                        <input type="password" name="regpassword" id="regpassword" value="" placeholder="Passwort" tabindex="3" />
                                                        <label  id="msgregpw"></label>
                                                        <br>
                                                        <input type="password" name="regpasswordag" id="regpasswordag" value="" placeholder="Passwort wiederholen" tabindex="4" />
                                                        <label  id="msgregpwag"></label>
                                                        <br>
                                                        <input type="text" name="regemail" id="regemail" value=""  placeholder="E-Mail" tabindex="1" maxlength="64" tabindex="5" />
                                                        <label  id="msgemail"></label>
                                                        <br>
                                                        <span class="loginbutton">
                                                            <input id="regok" type="submit" name="regok" value="Registrieren" class="primary" tabindex="5"/>
                                                            <input type="reset" value="Reset" tabindex="6" />
                                                        </span>
                                                      </form>
                                                        <span class="loginlink"><a href="loginseite.php"><b>Zur&uumlck</b></a></span>
                                                    </div>
                                                    <?php if ($_SESSION["ErrorMSG1"]!="" or $_SESSION['ErrorMSG2']!="" ){
                                                            echo '<div class= "msgbox">';
                                                            echo $_SESSION['ErrorMSG1'];
                                                            echo $_SESSION['ErrorMSG2'];
                                                            echo '</div>'; 
                                                    }?>
                                                         
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

                        <ul class="icons">
                            <li><a href="tel:+41627728069" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="mailto:admin.bclaufen.ch" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                    </section>
							
							<ul class="copyright">
								<li>&copy; FHNW 2018. All rights reserved</li><li>Design:Eduart Bunjaku, Robin Widmer, Lars Lutz</li>
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
                        <script src="assets/js/formreg.js"></script>

	</body>
</html>

<?php
$_SESSION['ErrorMSG1']="";
$_SESSION['ErrorMSG2']="";
?>