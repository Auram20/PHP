

<p>Voici les informations du cast : 
<br/>
    
<?php

include "Cast.class.php";
include "Movie.class.php";
  
	$cast = Cast::createFromId($_GET["id"]);

    echo " First Name : {$cast->getFirstName()}<br>Last Name :  {$cast->getLastName()}<br>BirthYear : {$cast->getBirthYear()}<br>DeathYear : {$cast->getDeathYear()}<br>";
	

    ?> 





</p>

