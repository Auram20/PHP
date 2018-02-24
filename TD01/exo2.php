<!DOCTYPE html>
<html>
    <head>
        <title>TD 01 </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>TD 01 : Affichages / Variable / Arrays en PHP</h2>
        
        <p>
            Cette ligne est une ligne de test qui a été écrite entièrement en HTML.<br /><br />
            <b> On commence par afficher la ligne normalement en PHP </b><br/>
        <?php 
        $prenom=  "Pascale";
        $nom=  "Ho";
        $ville=  "Schlag-sur-marne";
        $age= 25;
        if ($age>1){    
        echo "Bonjour je m'apelle $prenom $nom et j'habite à $ville, j'ai $age ans" ;   
        }
            else{
                echo "Bonjour je m'apelle $prenom $nom et j'habite à $ville, j'ai $age an" ;   
            }
            
            ?>
        </p>
        
        
        <!-- On passe aux essais avec tableaux --> 
        <p> <b>On passe aux tableaux </b><br/> <br/>
         <?php    
            $personne['prenom'] = 'Myriam';
            $personne['nom'] ='Anik';
            $personne['ville'] = 'Schlag-Sur-Marne';
            $personne['age'] = 21;
    
    
             if ($personne['age']>1){    
        echo "Bonjour $prenom, moi c'est $personne[prenom] $personne[nom] et j'habite à $personne[ville], j'ai $personne[age] ans" ;   
                                    }
            else{
                echo "Bonjour $prenom, moi c'est $personne[prenom] $personne[nom] et j'habite à $personne[ville], j'ai $personne[age] an " ;   
            }
            
            echo "<br /><br /> <b>On vérifie que le tableau est bien rempli : </b><br />";
            
            var_dump($personne);
            ?>
            <br/> <br/>
            
            <!-- On passe aux jours de la semaine --> 
            
            <b>On passe à l'affichage des jours de la semaine</b> <br/>
            <?php
            $week = ["Lundi", "Mardi", "Mercredi", "Jeudimac", "Vendredi", "Samedi","Dimanche"]; 
            foreach($week as $element){
                echo "$element <br />";
            }
            echo "<br/>";
            ?>
            
            
            <!-- On passe à la liste de personnes --> 
            
            <b>On passe à l'affichage de la liste des personnes</b> <br/>
            <?php 
                $personnes[0]=$personne; //J'utilise l'array que j'ai déjà initialisée en haut (ANIK MYRIAM)
                // J'initialise une autre personne tiens.     
                $personne1['prenom'] = 'Nina';
                $personne1['nom'] ='De Castro';
                $personne1['ville'] = 'Schlag-Sur-Marne';
                $personne1['age'] = 26;
                $personnes[1]=$personne1;
            
            if (count($personnes) != NULL){
              foreach($personnes as $element){
                  foreach($element as $elementito){
                      echo "$elementito <br />";}
            }
            }
            else {
            echo "Le tableau est vide, il n'y a p";}
            ?>
            
            
        </p>
        
        
        
        
        
    </body>
</html>