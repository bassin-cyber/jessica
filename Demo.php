<?php
function repondre_oui_non ($phrase) {
while (true) {
    $reponse = readline ($phrase) . "-(o)ui/ (n)on: ";
    if($reponse === "o"){
        return true;
    }elseif ($reponse ==='n'){
         return false; 
    }
        }
}

function demander_creneau ($phrase = 'veillez entrer un creneau'){
    echo $phrase. "\n";
while (true){
        $ouverture =(int) readline ('Heure d\'ouverture: ');
        if ($ouverture >=0 && $ouverture<=23){
            break ;
        }
    }
while (true){
    $fermerture = (int) readline ('Heure de fermerture:  ');
        if ($fermerture >=0 && $fermerture <=23 && $fermerture > $ouverture){
              break;
        }
    }
        return[$ouverture, $fermerture];
}


// $resultat = reponse_oui_non('voulez vous continuer ?');
$creneau = demander_creneau(); //[8, 9]
$creneau2 = demander_creneau('entrer votre creneau: ');
// Si l'utulisateur tape "o" => true
// Si l'utulisateur tape "n" => false
var_dump ($creneau, $creneau2);