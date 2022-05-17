<?php
$operateurs = ["+", "-", "x", "/"];
var_dump($operateurs);
if((isset($_POST['operateur'])) && isset($_POST['premiereValeur']) && isset($_POST['secondeValeur'])){
switch($_POST['operateur']){
    case "+" : echo $_POST['premiereValeur'] + $_POST['secondeValeur'];break;
    case "-" : echo $_POST['premiereValeur'] + $_POST['secondeValeur'];break;
    case "+" : echo $_POST['premiereValeur'] + $_POST['secondeValeur'];break;
    case "+" : echo $_POST['premiereValeur'] + $_POST['secondeValeur'];break;
}
}else{
    echo "Pas encore de résultat";
}
?>