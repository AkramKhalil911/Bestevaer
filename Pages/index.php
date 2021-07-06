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
        <div class="IndexBanner">
            <div class="IndexBRText">
                <h1>Bestevaer</h1>
                    <br>
                        <h2>De officiele beladingsapp voor schepen</h2>
            </div>
        </div>
            <div class="WhyBestevaer">
                <div class="TitleWhy">
                    <h1>Waarom Bestevaer?</h1>
                        <br>
                            <h2>Lekker makkelijk!</h2>
                </div>
                    <div class="Icons">
                        <div class="Box1" data-aos="zoom-in" data-aos-offset="300"><i class="fas fa-ship"></i>
                            <br>
                                <h3>Informatie over schepen</h3></div>
                        <div class="Box2" data-aos="zoom-in" data-aos-offset="350"><i class="fas fa-tachometer-alt"></i>
                            <br>
                                <h3>Lekker makkelijk wegen</h3></div>
                        <div class="Box3" data-aos="zoom-in" data-aos-offset="400"><i class="fas fa-hard-hat"></i>
                            <br>
                                <h3>Veiligheid gaat altijd voor</h3></div>
                    </div>
            </div>
                <div class="Informatie">
                    <div class="Text1">
                        <h1>Klik hier voor contact</h1>
                            <form method="POST" action="contact.php">
                                <input type="Submit" name="Submit" class="btnInformatie" data-aos="fade-right" data-aos-offset="300" value="Contact">
                            </form>
                    </div>
                    <div class="Text2">
                        <h1>Klik hier voor de beladingsapp</h1>
                            <form method="POST" action="beladingsapp.php">
                                <input type="Submit" name="Submit" class="btnBeladingsapp" data-aos="fade-left" data-aos-offset="300" value="beladingsapp">
                            </form>
                    </div>
                </div>
        <div class="BWbackground"></div>
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