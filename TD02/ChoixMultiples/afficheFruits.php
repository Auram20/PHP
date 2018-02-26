

<p>Voici tes fruits préférés  : |
    
    
<?php
    
  foreach($_POST['case'] as $valeur)
{
   echo  "$valeur | ";
}
    
if(!$_POST['case']){
   echo "Aucun fruit n'a été coché";
}
    
    ?> 





</p>



<p>Une autre séléction ?  <a href="formulaireFruits.html">clique ici</a>.</p>