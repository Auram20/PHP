

<p>Voici les casts : 
<br/>
    
<?php

include "Cast.class.php";
include "Movie.class.php";
  
   	foreach (Cast::getAll() as $cast) {
		echo "
		<li>
			<a href = \"cast.php?id={$cast->getId()}\">
			{$cast->getFirstname()} {$cast->getLastname()}
			</a>
		</li>
		"; 
	}

    ?> 





</p>

