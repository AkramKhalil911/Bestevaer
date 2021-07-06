<?php 
session_start();
include_once("config.php");

/* login form */

if(isset($_POST['loginBTN'])){
    global $message;
    $con = config::connect();
    $gebruikersnaam = hasheduser($_POST['gebruikersnaam']);
    $wachtwoord = hashedpass($_POST['wachtwoord']);

    if(checklogin($con, $gebruikersnaam, $wachtwoord)){
        $_SESSION['gebruikersnaam'] = $gebruikersnaam;
        header("location:../Pages/beladingsapp.php");
    }
    else{
        $message = "Het gebruikersnaam of wachtwoord is incorrect";
    }
}

function checklogin($con, $gebruikersnaam, $wachtwoord){
    $query = $con->prepare("SELECT * FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam AND wachtwoord = :wachtwoord");
    
    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->bindParam(":wachtwoord", $wachtwoord);
    $query->execute();

    if($query->rowCount() == 1){
        return true;
    }
    else {
        return false;
    }
}

/* contact form */

if(isset($_POST['SendContact'])){
    $con = config::connect();
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $onderwerp = $_POST['onderwerp'];
    $bericht = $_POST['bericht'];
    $message = "";

    if(empty($_POST["Naam"]) && empty($_POST["Achternaam"]) && (empty($_POST["Email"]) && empty($_POST["Onderwerp"])) && empty($_POST["Bericht"])){
        $message = "U moet uw velden invullen";
    }
    if(Details($con, $naam, $achternaam, $email, $onderwerp, $bericht)); {
        $_SESSION['naam'] = $naam;
        header("location:../Pages/contact.php?verzonden");
    }
}


function Details($con, $naam, $achternaam, $email, $onderwerp, $bericht) {
    $query = $con->prepare("
    INSERT INTO contactform (naam, achternaam, email, onderwerp, bericht)

    VALUES(:naam, :achternaam, :email, :onderwerp, :bericht)
    ");

    $query->bindParam(":naam", $naam);
    $query->bindParam(":achternaam", $achternaam);
    $query->bindParam(":email", $email);
    $query->bindParam(":onderwerp", $onderwerp);
    $query->bindParam(":bericht", $bericht);

    return $query->execute();
}

/* Registreer form */

if(isset($_POST['registreerBTN'])){
    global $message;
    $con = config::connect();
    $gebruikersnaam = hasheduser($_POST['gebruikersnaam']);
    $wachtwoord = hashedpass($_POST['wachtwoord']);

    if(empty($_POST["gebruikersnaam"]) && empty($_POST["wachtwoord"])) {
        header("location:../Pages/register.php?error=velden");
        $message = '<h1>Je moet alle velden invullen</h1>';
        return $message;
        exit();
    }
    if(Register($con, $gebruikersnaam, $wachtwoord)); {
        $_SESSION['gebruikersnaam'] = $gebruikersnaam;
        header("location:../Pages/beladingsapp.php");
    }
}

function Register($con, $gebruikersnaam, $wachtwoord) {
    $query = $con->prepare("
    INSERT INTO gebruikers (gebruikersnaam, wachtwoord)

    VALUES(:gebruikersnaam,:wachtwoord)
    ");

    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->bindParam(":wachtwoord", $wachtwoord);

    return $query->execute();
}

function hasheduser($string) {
    $string = strip_tags($string);
    $string = str_replace('','',$string);
    return $string;
}

function hashedpass($string){
    $string = md5($string);
    password_verify($string, $_POST['wachtwoord']);
    return $string;
}

?>