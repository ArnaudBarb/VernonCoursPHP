<?php

// $valeur = 42;

// if ($valeur > 0){
//     echo "positif";

// } elseif ($valeur == 0){
//     echo "valeur nulle";

// } else{
//     echo "négatif";}

//Correction

$valeur = 42;
$resultat="";

if(is_numeric($valeur)){
if($valeur > 0){
    $resultat = "positive";
} elseif ($valeur < 0){
    $resultat ="Négative";
} else{
    $resultat = "nulle";
}
}
else $resultat = "non numérique";

echo "La valeur est $resultat.";
?>

<p><a href="boucles.php">Boucles</a></p>
