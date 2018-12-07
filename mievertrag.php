<?php
include "isuser.php";
include 'db.php';
include "autologout.php";
include "mietvertrag_sql.php";
?>


<!DOCTYPE HTML>

<html>
    <head>
        <title>Mietrechnung</title>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
                    <li><a href="mieterspiegel.php">Mieterspiegel</a></li>
                    <li><a href="nebenkosten.php">Nebenkosten</a></li>
                    <li><a href="newsseite.php">News</a></li>
                    <li><a href="mietrechnung.php">Mietrechnung</a></li>
                    <li><a target ="_blank" href="hausordnungpdf.php">Hausordnung</a></li>
                    <li><a href="mievertrag.php">Mietvertrag</a></li>
                    <li><a href="userconf.php">Einstellungen</a></li>
                    <li><a href="logout.php"><b>Logout</b></a></li>

                    
                </ul>
            </nav>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Mietvertrag</h1>
                    <span class="image main"><img alt="" /></span>
                    <div class="table-wrapper">
                        <b>Angaben des Mieters:</b><br/><br/> 
                        <table>
                        <tr>
                            <td>Name:</td>
                            <td><?php echo $mietvnachname[] = $rows1['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Vorname:</td>
                            <td><?php echo $mietvvorname[] = $rows2['vorname'];?></td>

                        </tr>
                        <tr>
                            <td>Geburtsdatum:</td>
                            <td><?php echo $mietvgeburtsdatum[] = $rows3['geburtsdatum'];?></td>
                        </tr>
                        <tr>
                            <td>Telefon:</td>
                            <td><?php echo $mietvtel[] = $rows4['tel'];?></td>
                        </tr>
                        <tr>
                            <td>Strasse:</td>
                            <td>Hauptstrasse 34</td>
                        </tr>
                        <tr>
                            <td>PLZ:</td>
                            <td>5000 Aarau</td>
                        </tr>
                        </table><br/><br/>
                        
                        <b>Angaben des Vermieters:</b><br/><br/> 
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td>Müller</td>
                            </tr>
                            <tr>
                                <td>Vorname:</td>
                                <td>Friedolin</td>
                            </tr>
                            <tr>
                                <td>Geburtsdatum:</td>
                                <td>1950-12-08</td>
                            </tr>
                            <tr>
                                <td>Telefon:</td>
                                <td>621288245</td>
                            </tr>
                            <tr>
                                <td>Strasse:</td>
                                <td>Hauptstrasse 34</td>

                            </tr>
                            <tr>
                                <td>PLZ:</td>
                                <td>5000 Aarau</td>

                            </tr>
                        </table>
                        
                        <b>Angaben zum Mietobjekt</b><br/><br/> 
                        <table>
                            <tr>
                                <td>Mietzins:</td>
                                <td><?php echo $mietvzins[] = $rows6['miete']; ?></td>
                            </tr>
                            <tr>
                                <td>Fläche:</td>
                                <td><?php echo $mietvflaeche[] = $rows7['flaeche'];?></td>
                            </tr>
                            <tr>
                                <td>Grösse:</td>
                                <td><?php echo $mietvzimmer[] = $rows8['groesse'];?></td>

                            </tr>
                            <tr>
                                <td>Stockwerk:</td>
                                <td><?php echo $mietvstockwerk[] = $rows9['stockwerk'];?></td>
                            </tr>
                            <tr>
                                <td>Nebenkosten:</td>
                                <td><?php echo $mietvnebenkosten[] = $rows10['betrag'];?></td>
                            </tr>
                            <tr>
                                <td>Einzugsdatum:</td>
                                <td><?php echo $mietveinzugsdatum[] = $rows11['einzugsdatum'];?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <section>
                        <h2>Kontakt</h2>
                        <form method="post" action="mail.php">
                            <div class="fields">
                                <div class="field half">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>
                                <div class="field half">
                                    <input type="email" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <textarea name="message" id="message" placeholder="Nachricht"></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" name="mailsend" value="Senden" class="primary" /></li>
                            </ul>
                        </form>
                    </section>
                    <section>
                        <ul class="icons">
                            <li><a href="tel:+41627728069" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="mailto:admin@bclaufen.ch" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
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

<?php
include_once 'dbclose.php';
$_SESSION['ErrorMSG1'] = "";
$_SESSION['ErrorMSG2'] = "";
$_SESSION['ErrorMSG3'] = "";
?>