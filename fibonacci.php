<?php

$N1 = 0;
$N2 = 1;
$limite = 10;
$ayuda=null;

for ($i=0; $i < $limite ; $i++) { 
     $ayuda = $N1;

     $N1 = $N2;

     $N2 = $ayuda + $N1;
     
     echo "Serie de Finacci: ". $N1 . "\n";
}
?>