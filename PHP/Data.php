<?php 
    $M3schip = $_GET['M3schip'];
    $Ladingtonnen = $_GET['Ladingtonnen'];
    $Schip = $_GET['Schip'];
    $Seizoen = $_GET['Seizoen'];
    $Water = $_GET['Water'];
    $Schepen = array("NSANGELA", "LUCKYSTAR", "SABRINA", "HERMES", "TRIUMPHIV");    
    $MaxM3schip = array(6803, 7527.8, 12400, 6803, 8262);
    $MaxLadingtonnen = array(3806, 4178, 6278, 3806, 4039);
    $Indexschip = array_search($Schip, $Schepen);
    $Uitkomst = "";
    $Uitkomst1 =  $M3schip - $MaxM3schip[$Indexschip];
    $Uitkomst2 =  $Ladingtonnen - $MaxLadingtonnen[$Indexschip];


function Schiplading(){
    global $M3schip, $Ladingtonnen, $Schip, $Schepen, $MaxM3schip, $MaxLadingtonnen, $Indexschip, $Uitkomst, $Uitkomst1, $Uitkomst2;

    if ($Schip == $Schepen[$Indexschip]) {
        if ($MaxM3schip[$Indexschip] >= $M3schip && $MaxLadingtonnen[$Indexschip] >= $Ladingtonnen) {
            $Uitkomst = "<h1 style='color:Green'>U kan uw lading veilig inladen</h1>";
        }
        else if ($MaxLadingtonnen[$Indexschip] >= $Ladingtonnen &&  $MaxM3schip[$Indexschip] <= $M3schip ){
            $Uitkomst = "<h1 style='color:red'>Waarschuwing: U heeft $Uitkomst1 m3 overscheden</h1>";
        } 
        else if ($MaxLadingtonnen[$Indexschip] <= $Ladingtonnen && $MaxM3schip[$Indexschip] >= $M3schip){
            $Uitkomst = "<h1 style='color:red'>Waarschuwing: U heeft $Uitkomst2 ton overscheden</h1>";
        }
        else if ($MaxLadingtonnen[$Indexschip] <= $Ladingtonnen   && $MaxM3schip[$Indexschip] <= $M3schip  ){
            $Uitkomst = "<h1 style='color:red'>Waarschuwing: U heeft $Uitkomst1 m3 en $Uitkomst2 ton overschreden</h1>";
        }
    }
}


Schiplading();

$data = array('Uitkomst' => $Uitkomst);
echo json_encode($data);


?>