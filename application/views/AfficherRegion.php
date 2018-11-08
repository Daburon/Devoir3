<?php

foreach($lesRegion as $uneRegion)
{  
    echo "<input name='optRegion' onclick=AfficherVille(this.value) type='radio' value='". $uneRegion->nom ."'>".$uneRegion->score."</br>"; 
}
?>