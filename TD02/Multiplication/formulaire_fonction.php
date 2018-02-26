<?php 

function generate_table($chiffre){
    
    
    for($index=0; $index<=10; $index++){
    $res=$index*$chiffre;    
    echo " $chiffre x $index = $res </br> ";
    
    }

}

?>
    