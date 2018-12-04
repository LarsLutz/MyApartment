<!DOCTYPE HTML>

<html>
	<head>
            <title>Password versendet</title>
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
                                                                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Meldungen MyApartment</span>
								</a>

							

						</div>
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
                                                    <h1><?php echo $titel;?></h1>
                                                    <h2><?php foreach($errors as $error)
                                                             echo $error;?>
                                                    </h2>
                                                    <h3><?php echo $pw;?>
                                                    </h3
                                                    <br>
                                                    <span class="loginlink"><a href="index.php"><b>Weiter</b></a></span>    
                                                    
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								
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

	</body>
</html>

