


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

	.c{
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

<p class="c" >MOVIE RESEARCH </p>
<br/>

<form action="moviesearch.php" method="POST">
<p>
	Title : 
    <input type="text" name="title" /><br>
    Released between  :  
    <input type="date" name="date1" value="1920-01-01"/>
    And : 
    <input type="date" name="date2" value="2030-01-01"/><br>
<!-- Je n'ai pas mis tous les genres, mais j'aurai pu, mais de toutes manières ils comptent pas dans le formulaire, j'ai pas su gérer --> 
  Genre : <br> 
				<input type ="checkbox" name ="genres[]" value = "action" checked="checked">Action<br>
				<input type="checkbox" name ="genres[]" value = "comedy">Comedy<br>
				<input type="checkbox" name ="genres[]" value = "drama">Drama<br>
				<input type ="checkbox" name ="genres[]" value = "horror">Horror<br>
				<input type="checkbox" name ="genres[]" value = "science fiction">Science Fiction<br>
				<input type ="checkbox" name ="genres[]" value = "thriller">Thriller<br>
				<input type ="checkbox" name ="genres[]" value = "western">Western<br>

	Country : 
	<select name="choix">
    <option value="USA">U.S.A</option>
    <option value="FR">FRANCE</option>
    <option value="IT">ITALY</option>
    <option value="DE">GERMANY</option>
    <option value="GB">GREAT BRITAIN</option>
    <option value="KR">SOUTH KOREA</option>
    <option value="JP">JAPAN</option>
	</select><br>
	Actor or Director : 
	<input type="text" name="cast">

    <input type="submit" value="Valider" />


</p>
</form>