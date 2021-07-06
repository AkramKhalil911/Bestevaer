<?php session_start(); ?>
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
        <div class="ContactBanner">
            <h1>Contact</h1>
        </div>
            <div class="ZoekContact">
                <div class="ContactForm">
                    <h1>Contact ons</h1>
                        <br>
                            <form method="POST" action="../PHP/process.php">
                                <div class="ContactFormbox">
                                    <label for="naam">Naam</label>
                                    <input type="text" name="naam" id="naam" required>
                                </div>
                                <div class="ContactFormbox">
                                    <label for="achternaam">Achternaam</label>
                                    <input type="text" name="achternaam" id="achternaam" required>
                                </div>
                                <div class="ContactFormbox">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder required>
                                </div>
                                <div class="ContactFormbox">
                                    <label for="onderwerp">Onderwerp</label>
                                    <input type="text" name="onderwerp" id="onderwerp" required>
                                </div>
                                <div class="ContactFormbox">
                                    <label for="bericht">Bericht</label>
                                    <textarea name="bericht" id="bericht" required></textarea>
                                </div>
                                    <input type="submit" id="SendContact" name="SendContact" value="SendContact">
                            </form>
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