<?php
include "isuser.php";
include 'db.php';
include "autologout.php";
include "nebenkosten_sql.php";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Nebenkosten</title>
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
                    <li><a href="mieterspiegel.php">Mieterspiegel</a></li>
                    <li><a href="nebenkosten.php">Nebenkosten</a></li>
                    <li><a href="newsseite.php">News</a></li>
                    <li><a href="mietrechnung.php">Mietrechnung</a></li>
                    <li><a href="hausordnung.pdf">Hausordnung</a></li>
                    <li><a href="userconf.php">Einstellungen</a></li>
                    <li><a href="logout.php"><b>Logout</b></a></li>
                </ul>
            </nav>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1>Nebenkosten</h1>

                    <span class="actions">
                        <form>
                            <input type="button" onclick="machuf('2018')" value="2018" class="primary" tabindex="3"/>
                            <input type="button" onclick="machuf('2017')" value="2017" tabindex="4" />
                        </form>
                    </span>

                    <!-- vlt no usse neh -->
                    <script>
                        function machuf(jh) {
                            var id = document.getElementById(jh);
                            document.getElementById('2018').style.display = "none"
                            document.getElementById('2017').style.display = "none"
                            if (id.style.display === "none") {
                                id.style.display = "block";
                            } else {
                                id.style.display = "none";
                            }
                        }
                    </script>

                    <div class="tabbox">
                        <div id="2018" >
                            <svg id="statSvg" width="1500" height="650">
                            <text x="0" y="80" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $heizkosten2018[] = $row['betrag']; ?> </text>
                            <rect x="50" y="50" width="<?php echo $heizkosten2018[] = $row['betrag']; ?>" height="50" rx="3" ry="3" fill="#efeb09" />

                            <text x="0" y="180" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $nebenkosten2018[] = $row2['betrag']; ?> </text>
                            <rect x="50" y="150" width="<?php echo $nebenkosten2018[] = $row2['betrag']; ?>" height="50" rx="3" ry="3" fill="#2A7BB4" />

                            <text x="0" y="280" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $parkplatz2018[] = $row4['betrag']; ?> </text>
                            <rect x="50" y="250" width="<?php echo $parkplatz2018[] = $row4['betrag']; ?>" height="50" rx="3" ry ="3" fill="#f91800" />

                            <text x="0" y="380" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $wasserverbrauch2018[] = $row6['betrag']; ?> </text>
                            <rect x="50" y="350" width="<?php echo $wasserverbrauch2018[] = $row6['betrag']; ?>" height="50" rx="3" ry ="3" fill="#4be530" />

                            <rect x="22" y="470" width="25" height="25" rx="3" ry="3" fill="#efeb09" />
                            <text x="70" y="490" font-size:0.6em font-family="Arial" fill="#404040">Heizkosten </text>

                            <rect x="22" y="510" width="25" height="25" rx="3" ry="3" fill="#2A7BB4" />
                            <text x="70" y="530" font-size:0.6em font-family="Arial" fill="#404040">Nebenkosten </text>

                            <rect x="22" y="550" width="25" height="25" rx="3" ry="3" fill="#f91800" />
                            <text x="70" y="570" font-size:0.6em font-family="Arial" fill="#404040">Parkplatz </text>

                            <rect x="22" y="590" width="25" height="25" rx="3" ry="3" fill="#4be530" />
                            <text x="70" y="610" font-size:0.6em font-family="Arial" fill="#404040">Wasserkosten </text>

                            <line x1="51" y1="10" x2="51" y2="450" stroke-width="2" stroke="#808080" />
                            </svg>
                        </div>
                    </div>
                    <div class="tabbox">
                        <div id="2017" style="display:none"> 
                            <svg id="statSvg" width="1500" height="650">
                            <text x="0" y="80" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $heizkosten2017[] = $row8['betrag']; ?> </text>
                            <rect x="50" y="50" width="<?php echo $heizkosten2017[] = $row8['betrag']; ?>" height="50" rx="3" ry="3" fill="#efeb09" />

                            <text x="0" y="180" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $nebenkosten2017[] = $row10['betrag']; ?> </text>
                            <rect x="50" y="150" width="<?php echo $nebenkosten2017[] = $row10['betrag']; ?>" height="50" rx="3" ry="3" fill="#2A7BB4" />

                            <text x="0" y="280" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $parkplatz2017[] = $row12['betrag']; ?> </text>
                            <rect x="50" y="250" width="<?php echo $parkplatz2017[] = $row12['betrag']; ?>" height="50" rx="3" ry ="3" fill="#f91800" />

                            <text x="0" y="380" font-size:0.8em font-family="Arial" fill="#404040"><?php echo $wasserverbrauch2017[] = $row14['betrag']; ?> </text>
                            <rect x="50" y="350" width="<?php echo $wasserverbrauch2017[] = $row14['betrag']; ?>" height="50" rx="3" ry ="3" fill="#4be530" />

                            <rect x="22" y="470" width="25" height="25" rx="3" ry="3" fill="#efeb09" />
                            <text x="70" y="490" font-size:0.6em font-family="Arial" fill="#404040">Heizkosten </text>

                            <rect x="22" y="510" width="25" height="25" rx="3" ry="3" fill="#2A7BB4" />
                            <text x="70" y="530" font-size:0.6em font-family="Arial" fill="#404040">Nebenkosten </text>

                            <rect x="22" y="550" width="25" height="25" rx="3" ry="3" fill="#f91800" />
                            <text x="70" y="570" font-size:0.6em font-family="Arial" fill="#404040">Parkplatz </text>

                            <rect x="22" y="590" width="25" height="25" rx="3" ry="3" fill="#4be530" />
                            <text x="70" y="610" font-size:0.6em font-family="Arial" fill="#404040">Wasserkosten </text>

                            <line x1="51" y1="10" x2="51" y2="450" stroke-width="2" stroke="#808080" />
                            </svg>
                        </div>
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
                                <li><input  name="mailsend" id="mailsend" type="submit" value="Senden" class="primary" /></li>
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



    </body>
</html>

<?php
include_once 'dbclose.php';
$_SESSION['ErrorMSG1'] = "";
$_SESSION['ErrorMSG2'] = "";
$_SESSION['ErrorMSG3'] = "";
?>