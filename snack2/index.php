<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controllo</title>
</head>
<body>

<?php 

$data= $_GET;

if(empty($data['name']) || empty($data['mail']) || empty($data['age'])){
    echo "Errore: inserire i dati";
}
elseif(strlen($data['name']) <= 2){
    echo "Errore: inserisci un nome più lungo";
}
elseif (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false){
    echo "Errore: email non valida";
}
elseif (!is_numeric($data['age'])){
    echo "Errore: età non corretta";
}
else{
    echo "Accesso consentito";
}
?>
    
</body>
</html>