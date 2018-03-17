
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

	SELECT DISTINCT m.title,g.name
	FROM Movie m, Genre g, Cast c, Actor a
	WHERE (m.idCountry LIKE '%FR') AND
    	  (g.id=m.id)  AND 
          (m.id=a.idMovie) AND 
          (a.idActor=c.id) AND 
          (a.idActor=29)




/*f.​ Afficher les noms et prénoms ainsi que le rôle des acteurs/actrices des films réalisés par
Myriam Anik, trié selon leur rôle. */ 



	

    
