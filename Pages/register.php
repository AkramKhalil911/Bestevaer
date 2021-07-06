<?php include_once('../PHP/process.php')?>
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
        <div class="registreerBG">
            <div class="registreerlayout">
                <form class="registreerform" method="POST">
                    <label for="gebruikersnaam">Gebruikersnaam</label>
                    <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam" maxlength="16" required>
                    <label for="wachtwoord">Wachtwoord</label>
                    <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" maxlength="16" required>
                    <input type="submit" class="registreerBTN" id="registreerBTN" name="registreerBTN" value="registreer">
                    <a style="text-align: center" href="login.php">Heb je al een account? Log nu in!</a>
                </form>
            <?php 
            if(isset($message))  
            {  
                    echo '<label class="error">'.$message.'</label>';  
            }  
            ?>
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