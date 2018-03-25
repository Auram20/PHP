


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
<form action="Movie.php" method="post">
<p>
	Title : 
    <input type="text" name="title" /><br>
    Released between  :  
    <input type="date" name "date1" />
    And : 
    <input type="date" name "date2" /><br>

  Genre : <br>
				<input type ="checkbox" name ="action" value = "action">Action<br>
				<input type ="checkbox" name="animation" value = "animation">Animation<br>
				<input type ="checkbox" name ="adventure" value = "adventure">Adventure<br>
				<input type="checkbox" name ="comedy" value = "comedy">Comedy<br>
				<input type="checkbox" name ="drama" value = "drama">Drama<br>
				<input type ="checkbox" name ="horror" value = "horror">Horror<br>
				<input type="checkbox" name ="science fiction" value = "science fiction">Science Fiction<br>
				<input type ="checkbox" name ="thriller" value = "thriller">Thriller<br>
				<input type ="checkbox" name ="western" value = "western">Western<br>

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
	Actor : 
	<input type="text" name="actor">
	Director : 
	<input type="text" name="director">

    <input type="submit" value="Valider" />


</p>
</form>