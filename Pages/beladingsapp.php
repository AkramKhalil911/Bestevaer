<?php  include_once("../PHP/profile.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestevaer</title>
    <script src="https://kit.fontawesome.com/7657391e54.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Raleway:wght@300&family=Roboto+Condensed:wght@700&family=Montserrat:wght@300&Poppins&display=swap" rel="stylesheet">
    <script src="../Javascript/Javascript.js" defer></script>
    <script src="../Javascript/Json.js" defer></script>
    <link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
    <header>
        <div class="Menu">
            <a href="index.php" class="logo">Bestevaer</a>
                <a href="#" class="Menuflex">
                    <span class="Bar"></span>
                    <span class="Bar"></span>
                    <span class="Bar"></span>
                </a>
                    <ul class="Menulinks">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="overons.php">Onze Schepen</a></li>
                        <li><a href="beladingsapp.php">Beladingsapp</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php 
                        if(isset($_SESSION["gebruikersnaam"])){
                            echo '<li class="LLBTN"><a href="../PHP/logout.php">Uitloggen</a></li>';
                        } else {
                            echo '<li class="LLBTN"><a href="../Pages/login.php">Inloggen</a></li>';
                        }
                        ?>
                    </ul>
        </div>
    </header>
    <main>
        <div class="BeladingsappBG">
            <div class="BeladingsappBanner"><h1>Beladingsapp</h1></div>
                <div class="BeladingsBox">
                    <div class="BeladingsForm">
                        <h1>Bereken schip lading</h1>
                            <div class="Schipform">
                                <div class="BeladingsFormbox">
                                    <label for="M3schip">Lading in m3</label>
                                    <input type="number" id="M3schip" name="M3schip" required>
                                </div>
                                <div class="BeladingsFormbox">
                                    <label for="Ladingtonnen">Lading in tonnen</label>
                                    <input type="number" id="Ladingtonnen" name="Ladingtonnen" required>
                                </div>
                                <div class="BeladingsFormbox">
                                    <label for="Seizoen">Seizoen</label>
                                    <select id="Seizoen" name="Seizoen" required>
                                        <option value="Zomer">Zomer</option>
                                        <option value="Herfst">Herfst</option>
                                        <option value="Winter">Winter</option>
                                        <option value="Lente">Lente</option>
                                    </select>
                                </div>
                                <div class="BeladingsFormbox">
                                    <label for="Water">Water</label>
                                    <select id="Water" name="Water" required>
                                        <option value="Zoet">Zoet</option>
                                        <option value="Zout">Zout</option>
                                    </select>
                                </div>
                                <div class="BeladingsFormbox">
                                    <label for="Schip">Schip soort</label>
                                    <select id="Schip" name="Schip" required>
                                        <option value="NSANGELA">NS ANGELA</option>
                                        <option value="LUCKYSTAR">LUCKY STAR</option>
                                        <option value="SABRINA">SABRINA</option>
                                        <option value="HERMES">HERMES</option>
                                        <option value="TRIUMPHIV">TRIUMPH IV</option>
                                    </select>
                                </div>
                                    <button onclick="senddata()" class="BerekenBTN" value="Bereken nu">Bereken nu</button>
                            </div>
                    </div>
                </div>
            <div class="Flexuitkomst">
                <div id="Uitkomst"></div>
            </div>
        </div>
    </main>
    <footer>
        <div class="Footer">
            <h1>Zoek Contact!</h1>
                <br>
                    <h2>Hier kunt u ons informatie vinden!</h2>
                        <div class="FooterTXT">
                            <i class="fas fa-envelope-open"></i>
                                <p>info@mail.com</p>
                        </div>
                        <div class="FooterTXT">
                            <i class="fas fa-search-location"></i>
                                <p>Locatie</p>
                        </div>
                        <div class="FooterTXT">
                            <i class="fas fa-phone"></i>
                                <p>0649103081</p>
                        </div>
        </div>
            <div class="FooterBottom">
                <p>Gemaakt door Akram Khalil</p>
            </div>
    </footer>
</body>
</html>