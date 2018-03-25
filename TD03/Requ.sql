
/* a. Afficher toutes les personnes dans Cast. */ 


	SELECT `firstname`,`lastname` FROM Cast;



/* b. Afficher toutes les personnes vivantes. */ 


	SELECT `firstname`,`lastname` FROM Cast WHERE `deathYear` IS NULL;


/* c. Afficher toutes les personnes vivantes qui ont plus de 65 ans (ça devient glauque...)*/ 


	SELECT `firstname`,`lastname` FROM Cast WHERE (`deathYear` IS NULL) AND (`birthYear`<(2018-65));



/*d. Afficher la personne la plus vieille de la base de donnée (qui est toujours vivante)*/

	SELECT  *
	FROM Cast
	WHERE   `birthYear` in (SELECT MIN(birthYear) FROM Cast WHERE `deathYear` IS NULL)


/*e. Afficher toutes les personnes ayant entre 30 et 50 ans. Triez selon l’âge de manière décroissante.*/
/* Nées entre (2017-50) et (2017-30)  */

	SELECT  *
	FROM Cast
	WHERE (`birthYear` BETWEEN (2018-50) AND (2018-30)) AND  `deathYear` IS NULL



/*f. Afficher les films ayant “the” dans son titre (sans prendre en compte la casse).*/

	SELECT *
	FROM Movie
	WHERE title LIKE '%the%' 


/* Jointures */ 

/* a.​ Afficher le titre et la date de sortie des films étatsuniens, trié du film le plus récent au plus ancien. */ 

	SELECT `title`, `releaseDate`
	FROM Movie 
	WHERE idCountry LIKE '%USA%'
	ORDER BY releaseDate DESC


/* b.​ Afficher le titre, la date de sortie et le nom du pays des films qui ont moins de 10 ans, trié du plus ancien au plus récent. */ 

	
	SELECT m.title, m.releaseDate, c.name
	FROM Movie m, Country c
	WHERE (m.idCountry=c.code AND 
		  m.releaseDate>=20080316)
	ORDER BY m.releaseDate  ASC


/*c.​ Afficher le titre et le genre des films américains ou italiens de plus de 20 ans. */ 

	SELECT m.title, g.name
	FROM Movie m, Genre g 
	WHERE 	(m.id=g.id AND
			(m.idCountry LIKE '%USA%' OR '%IT') AND 
			 m.releaseDate>=19980316
				)



/* d. ​Afficher tous les noms et prénoms acteurs/actrices (sans doublon), triés par nom puis prénom.*/


	SELECT DISTINCT  c.lastname, c.firstname
	FROM Cast c
	WHERE EXISTS ( SELECT a.* 
				   FROM Actor a 
				   WHERE idActor=c.id
				 )
	ORDER BY c.lastname ASC 



/* e.​ Afficher le titre et le genre des films français joués par Élodie Deshayes avec son rôle
dans ces films.*/ 

	SELECT DISTINCT m.title,g.name, a.name
	FROM Movie m, Genre g, Cast c, Actor a, MovieGenre mg
	WHERE (m.idCountry LIKE '%FR') AND
    	  (mg.idGenre=g.id)	AND
    	  (mg.idMovie=m.id)  AND 
          (m.id=a.idMovie) AND 
          (a.idActor=c.id) AND 
          (c.firstname LIKE '%Élodie%')and (c.lastname LIKE '%Deshayes%')
          




/*f.​ Afficher les noms et prénoms ainsi que le rôle des acteurs/actrices des films réalisés par
Myriam Anik, trié selon leur rôle. */ 



	SELECT DISTINCT c.lastname, c.firstname, a.name
	FROM Movie m, Cast c, Director d, Actor a
	WHERE 
		  (d.idMovie=m.id) AND
		  (a.idMovie=m.id) AND 
		  (c.id=a.idActor) AND 
		  (d.idDirector=( SELECT c.id
		  				  FROM Cast c
		  				  WHERE (c.firstname LIKE '%Myriam') AND (c.lastname LIKE '%Anik%')))

	ORDER BY a.name ASC


    

	

    
/*3. Requêtes complexes */

/* a.​ Afficher le genre et le nombre de films pour chaque genre. */ 

	SELECT  Genre.name, COUNT(MovieGenre.idGenre)
	FROM Genre 
	LEFT JOIN MovieGenre ON (Genre.id=MovieGenre.idGenre)
	GROUP BY Genre.name


/* b.​ Afficher le nombre de films ayant “Voix Off” dans la liste des acteurs. */
	
	SELECT DISTINCT COUNT(a.name) /*Important le Distinct ici car si 2 voix off pour un film*/ 
	FROM Actor a
	WHERE a.name LIKE '%Voix off%'
	



/* c.​ Afficher les noms et prénoms des acteurs et actrices qui ont joué en tant que "Développeur” ou “Développeuse”. */ 

	SELECT c.firstname, c.lastname 
	FROM Cast c, Actor a 
	WHERE (c.id=a.idActor) AND 
		   ((a.name LIKE '%Développeur%') OR (a.name LIKE "Développeuse"))




/*d.​ Afficher le nom du film réalisé par plus d’une personne. */ 


	SELECT m.title
	FROM Movie m, Director d
	WHERE (m.id=d.idMovie) 
	GROUP BY m.title
	HAVING COUNT(m.title)>1



/* e. ​Afficher le titre, le genre, le pays, la date de sortie et le nom-prénom du/des réalisateurs 
selon les filtres suivants (vous mettez les valeurs des critères de la manière que vous souhaitez) :
● le titre doit avoir telle chaîne de caractères,
● le genre doit être parmi plusieurs genres qui ont été renseignés,
● le pays doit être parmi plusieurs pays qui ont été renseignés,
● la date doit être entre une fourchette de dates,
● une chaîne de caractères doit se retrouver dans le prénom + nom du
réalisateur/réalisatrice (essayez de concaténer avec CONCAT ou || , cf la
documentation SQL ou le support)*/
	

	SELECT DISTINCT Movie.title, Country.name, Genre.name, Movie.releaseDate, Cast.firstname, Cast.lastname
	FROM Movie 	
	LEFT JOIN MovieGenre ON (Movie.id=MovieGenre.idMovie)
	LEFT JOIN Genre ON (Genre.id=MovieGenre.idGenre)
	LEFT JOIN Country ON (Country.code=Movie.idCountry)
    LEFT JOIN Director ON (Director.idMovie=Movie.id)
    LEFT JOIN CAST ON (Director.idDirector=Cast.id)
    WHERE (Movie.title LIKE 'MET%') AND
    	  ((Genre.name LIKE '%Drama') OR (Genre.name LIKE '%Comedy%')) AND
    	  ((Country.name LIKE '%USA') OR (Country.name LIKE '%France')) AND 
    	  ((Movie.releaseDate>=20080316) AND (Movie.releaseDate<=20190316)) AND 
    	  ((Cast.firstname LIKE '%riam') OR (Cast.firstname LIKE '%Quentin%')) AND 
    	  ((Cast.lastname LIKE '%Anik') OR (Cast.lastname LIKE '%Tarantino'))







	

    

	

    
