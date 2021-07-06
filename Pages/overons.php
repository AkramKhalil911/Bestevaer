<?php
session_start();
include_once('../PHP/config.php');
$con = config::connect();

class ok {
    var $IMOno;
    var $Naam;
    var $DWT;
    var $GT;
    var $Volume;
    var $Afbeelding;

    public function print_schepen(){
        echo '<div class="schepeninfo">';
        echo $this->Afbeelding. "<br>";
        echo "<p> IMOno = ".$this->IMOno. "<br>";
        echo "Naam = ".$this->Naam. "<br>";
        echo "DWT = ".$this->DWT. "<br>";
        echo "GT = ".$this->GT. "<br>";
        echo "Volume = ".$this->Volume. "</p>";
        echo "</div>";
    }
}

function buttons(){
    global $con, $query;
    if(isset($_POST['1'])){
        $query = $con->query('SELECT * FROM schepen WHERE IMOno = 9311555');
        $query->setFetchMode(PDO::FETCH_CLASS, 'ok');
        while($r = $query->fetch()){
            $r->print_schepen();
        }
    }
    if(isset($_POST['2'])){
        $query = $con->query('SELECT * FROM schepen WHERE IMOno = 9414735');
        $query->setFetchMode(PDO::FETCH_CLASS, 'ok');
        while($r = $query->fetch()){
            $r->print_schepen();
        }
    }
    if(isset($_POST['3'])){
        $query = $con->query('SELECT * FROM schepen WHERE IMOno = 9071076');
        $query->setFetchMode(PDO::FETCH_CLASS, 'ok');
        while($r = $query->fetch()){
            $r->print_schepen();
        }
    }
    if(isset($_POST['4'])){
        $query = $con->query('SELECT * FROM schepen WHERE IMOno = 9123506');
        $query->setFetchMode(PDO::FETCH_CLASS, 'ok');
        while($r = $query->fetch()){
            $r->print_schepen();
        }
    }
    if(isset($_POST['5'])){
        $query = $con->query('SELECT * FROM schepen WHERE IMOno = 9071052');
        $query->setFetchMode(PDO::FETCH_CLASS, 'ok');
        while($r = $query->fetch()){
            $r->print_schepen();
        }
    }
}

?>

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
        <div class="onzeschepenBG">  
            <form class="onzeschepenform" method="POST">
                <input type="submit" class="schepeninfoBTN" id="1" name="1" value="Triumph IV">
                <input type="submit" class="schepeninfoBTN" id="2" name="2" value="Sabrina">
                <input type="submit" class="schepeninfoBTN" id="3" name="3" value="NS ANGELA">
                <input type="submit" class="schepeninfoBTN" id="4" name="4" value="LUCKY STAR">
                <input type="submit" class="schepeninfoBTN" id="5" name="5" value="HERMES">
            </form>

        <div id="resultaat"><?php buttons();?></div>    
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