<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){

$password = isset($_POST["password"]) ? $_POST["password"] : "";

$score = 0;

$blacklist = ["123456", "azerty", "password", "admin"];

if(in_array($password, $blacklist)){
    $score = 0;
}else{

    if(strlen($password) >= 8){
        $score += 20;
    }

    if(strlen($password) >= 12){
        $score += 10;
    }

    if(preg_match("/[A-Z]/", $password)){
        $score += 15;
    }

    if(preg_match("/[a-z]/", $password)){
        $score += 15;
    }

    if(preg_match("/[0-9]/", $password)){
        $score += 15;
    }

    if(preg_match("/[@#$%&*!£]/", $password)){
        $score += 15;
    }

    if(strpos($password, " ") === false){
        $score += 10;
    }

}

if($score <= 39){
    $niveau = "Faible";
}
elseif($score <= 69){
    $niveau = "Moyen";
}
elseif($score <= 89){
    $niveau = "Bon";
}
else{
    $niveau = "Très fort";
}

echo "Score : " . $score . "/100 <br>";
echo "Niveau : " . $niveau;

}

?>