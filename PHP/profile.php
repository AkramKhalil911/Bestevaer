<?php 

session_start();  

include_once("config.php");

if(isset($_SESSION["gebruikersnaam"]))  
{  
}  
else  
{  
     header("location:login.php");  
}  



?>