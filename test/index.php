<?php


if($_SERVER['REQUEST_METHOD']== 'POST')
{

$Prixduproduit = isset($_POST["Prix"]) ? trim($_POST["Prix"]) : "";
$Quantite = isset($_POST["quantite"]) ? trim($_POST["quantite"]) : "";
$Codepromo = isset($_POST["codepromo"]) ? trim($_POST["codepromo"]) : "";
$Livraison = isset($_POST["livraison"]) ? trim($_POST["livraison"]) : "";



$prix = (float)$_POST["Prix"];
$quantite = (int)$_POST["quantite"];
    

if($Prixduproduit > 0){
    echo $Prixduproduit . " prix du produit <br>";
}else{
    echo "Le prix doit être supérieur à 0 <br>";
}

if($Quantite > 0){
    echo $Quantite . " quantité <br>";
}else{
    echo "La quantité doit être supérieure à 0 <br>";
} }

?> 
