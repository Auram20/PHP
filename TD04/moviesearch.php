


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

<p >YOUR RESEARCH RESULT</p>
<br/>

<?php

include "Cast.class.php";
include "Movie.class.php";
include "Genre.class.php";


$title=$_POST["title"];
$date1=$_POST["date1"];
$date2=$_POST["date2"];
$country=$_POST["choix"];
$cast=$_POST["cast"];
// Désolée mais j'arrive pas avec le choix multiple, alors j'l'ai dégagé :( 
$movies=Movie::getMovie($title, $cast, $date1, $date2, $country);

foreach ($movies as $movie) {
	$main = "<a href='movie.php?id={$movie->getId()}'>";
	$main .= $movie->getTitle(). " : " . $movie->getReleaseDate();
	$main .= "</a><br />";

	echo $main;
}	

if ($movies==NULL) // Si rien ne correspond à ma recherche 
	echo "<p>No records exist for the query criteria</p>";

echo " <a href = \"Formulaire.php\"> 	<br> Revenir au formulaire.</a> <br>"; 


    ?> 