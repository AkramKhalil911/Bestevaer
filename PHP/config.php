<?php 
class config {
    public static function connect(){
        $host = "localhost";
        $gebruikersnaam= "root";
        $wachtwoord= "";
        $dbname= "bestevaer";
        $message ="";

        try {
            $con = new PDO("mysql:host=$host;dbname=$dbname",$gebruikersnaam,$wachtwoord);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(PDOException $e) {
            $message = "Verbinding verloren" . $e->getMessage();
            die();
        }

        return $con;

    }
}



?>