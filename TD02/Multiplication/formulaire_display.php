


<?php

require_once('formulaire_fonction.php');

if ($_POST['chiffre']!=NULL){
echo "Voici la table de multiplication de votre nombre <br/>";
generate_table($_POST['chiffre']);
}
else {
    echo "Rentre un nombre bordel";
}
    
?>


<p>Pour rentrer un nombre à nouveau :  <a href="formulaire.php">clique ici</a>.</p>