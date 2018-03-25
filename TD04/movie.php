


<!DOCTYPE html>
<html>
<head>
	<title>Movie Information </title>
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

<p >MOVIE INFORMATION </p>
<br/>
    
<?php

include "Cast.class.php";
include "Movie.class.php";
include "Genre.class.php";
  
	$movie = Movie::createFromId($_GET['id']);

    echo " Title : {$movie->getTitle()}<br> Release Date :  {$movie->getReleaseDate()} <br>";

   
	if (count($directors = Cast::getDirectorsFromMovieId($movie->getId()) ) > 0){
		echo "<br>";
		echo "Director(s) : <br>";
		
		foreach ($directors as $director) 
			{
				echo "<a href = \"cast.php?id={$director->getId()}\"> {$director->getFirstName()} {$director->getLastName()}<br> </a>";
			}
		}
	
	if (count($actors = Cast::getActorsFromMovieId($movie->getId()) ) > 0){
		echo "<br><br>";
		echo "Actor(s) : <br> ";
		foreach ( $actors as $actor) {
			echo  "<a href = \"cast.php?id={$actor->getId()}\">{$actor->getFirstName()} {$actor->getLastName()}<br> </a>";
		}
	}
	
	if (count($genres =$movie->getGenres() ) > 0){
		echo "<br><br>";
		echo "Genre  : <br> ";
		foreach ( $genres as $genre) {
			echo $genre->getname()."<br>";
		}
	}


	if (count($countries=$movie->getCountries() ) > 0){
		echo "<br><br>";
		echo "Country  : <br> ";
		foreach ( $countries as $country) {
			echo $country->getname()."<br>";
		}
	}

	echo " <a href = \"movies.php\"> 	<br> Revenir à la page des Films.</a> <br>"; 

	echo " <a href = \"casts.php\"> 	Revenir à la page des Casts.</a>"; 


	echo " <a href = \"Formulaire.php\"> <br>	Faire une recherche.</a>"; 

    ?> 





</p>

