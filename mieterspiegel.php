<!DOCTYPE HTML>
<?php
include "isuser.php";
include 'db.php';
include "autologout.php";
 ?>

<html>
    <head>
        <title>Mieterspiegel</title>
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

                    <h1>Mieterspiegel</h1>
                    <span class="image main"><img src="images/pic13.jpg" alt="" /></span>                    
                    <div class="table-wrapper">
                        <table class="alt">
                                <?php include_once 'TabelleDBtest.php'; ?>
                        </table>
                        
                        <form name="Mieterspiegel dwonload" action="<?php download ?>" method="POST">
                        <input type="submit" action="<?php download ?>" value="Download Mieterspiegel" name="anzeigen" />

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

    </body>
</html>

<?php
include_once 'dbclose.php';
?>