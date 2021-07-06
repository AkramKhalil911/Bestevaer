function convertToJason(response){
    return response.json();
}

function processData(data){
    console.log(data);
    document.getElementById("Uitkomst").innerHTML = data.Uitkomst;  
}

function senddata(){
    console.log("Ok");    
    var Schip = document.getElementById('Schip').value;
    var M3schip = document.getElementById('M3schip').value;
    var Ladingtonnen = document.getElementById('Ladingtonnen').value;
    var Water = document.getElementById('Water').value;
    var Seizoen = document.getElementById('Seizoen').value;
    var url = "../PHP/Data.php?M3schip="+M3schip+"&Ladingtonnen="+Ladingtonnen+"&Seizoen="+Seizoen+"&Water="+Water+"&Schip="+Schip; 
    fetch(url)
    .then(convertToJason) 
    .then(processData)
}
