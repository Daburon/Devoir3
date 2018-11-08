<?php

foreach($lesVilles as $uneVille)
{  
    if($uneVille->choisie += 5)
    {
        echo "<input checked type='checkbox' name='choisie[]' value='".$uneVille->id."'>".$uneVille->nom ." - ".$uneVille->score."<br>"; 
    }
    else
    {
         echo "<input  type='checkbox' name='choisie[]' value='".$uneVille->id."'>".$uneVille->nom ." - ".$unAgent->score."<br>"; 
    }
   
}
echo "<input type='button' value = '+5 points' onclick='choisie()'>";