<?php
$operateurs = ["+", "-", "x", "/","%","exp"];
// var_dump($operateurs);
if((isset($_POST['operateur'])) && isset($_POST['premiereValeur']) && isset($_POST['secondeValeur'])){
    if(!empty($_POST['operateur']) && is_numeric($_POST['premiereValeur']) && is_numeric($_POST['secondeValeur'])){
$a= $_POST['premiereValeur'];
$b= $_POST['secondeValeur'];
    switch($_POST['operateur']){
    case "+" : $result=add($a,$b);break;
    case "-" : $result=sub($a,$b);break;
    case "x" : $result=mul($a,$b);break;
    case "/" : $result=div($a,$b);break;
    case "%" : $result=mod($a,$b);break;
    case "exp" : $result=power($a,$b);break;
}
}else{
    // $erreur="Saisir des valeurs valides";
}
}

function add($a, $b){
    return $a+$b;
}

function sub($a, $b){
    return $a-$b;
}

function mul($a, $b){
    return $a*$b;
}

function div($a, $b){
    return $a/$b;
}

function mod($a, $b){
    return $a%$b;
}

function power($a, $b){
    return $a**$b;
}
?>