
<!DOCTYPE html>
<html>
<head>
	<title>Cast Information </title>
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

<p >CAST INFORMATION </p>
<br/>
    
<?php

include "Cast.class.php";
include "Movie.class.php";
  
	$cast = Cast::createFromId($_GET['id']);

    echo " First Name : {$cast->getFirstName()}<br>Last Name :  {$cast->getLastName()}<br>BirthYear : {$cast->getBirthYear()}<br>DeathYear : {$cast->getDeathYear()}<br>";
	

	if (count($movies = Movie::getFromDirectorId($cast->getId()) ) > 0){
		echo "<br>";
		echo "Movies as Director : <br> <br>";
		
		foreach ($movies as $movie) 
			{
				echo "<a href = \"movie.php?id={$movie->getId()}\">".$movie->getTItle()."<br></a> ";
			}
		}
	
	if (count($movies = Movie::getFromActorId($cast->getId()) ) > 0){
		echo "<br><br>";
		echo "Movies as Actor : <br><br> ";
		foreach ( $movies as $movie) {
			echo  "<a href = \"movie.php?id={$movie->getId()}\">".$movie->getTItle()."<br></a>";
		}
	}


	echo " <br><a href = \"casts.php\"> 	Revenir à la page des Casts.</a>"; 

	echo " <a href = \"movies.php\"> 	<br> Revenir à la page des Films.</a>"; 

	echo " <a href = \"Formulaire.php\"> 	<br> Faire une recherche.</a>"; 

    ?> 





</p>

