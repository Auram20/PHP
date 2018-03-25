
<!DOCTYPE html>
<html>
<head>
	<title>Movie List </title>
	<style>

   	@import url('https://fonts.googleapis.com/css?family=Quicksand');
	body {background-color: #800020;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}

	p{
		font-family: 'Quicksand';
		font-size: 60px;
		text-align: center;
	}
	a {
	 color: inherit; 
	} 
</style>

</head>
<body>

<p >MOVIE LIST </p>
<br/>
    
<?php

include "Cast.class.php";
include "Movie.class.php";
  
   	foreach (Movie::getAll() as $movie) {
		echo "
		<li>
			<a href = \"movie.php?id={$movie->getId()}\">
			{$movie->getTitle()}
			</a>
		</li>
		"; 
	}

    ?> 





</p>
</body>
</html>


