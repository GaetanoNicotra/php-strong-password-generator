<?php

 $password = "";
 
 // recupero il valore del ccampo input con $_GET
if(isset($_GET['lunghezza'])){
    
    //variabili che contengono i caratteri per la password
    $upper = 'ABCDEFGHILMNOPQRSTUWXYZ';
    $lower='abcdefghilmnopqrstywxz';
    $special='£$%&/=?!"';
    $numbers='0123456789';

    // unisco le variabili
    $all =   $upper.$lower.$special.$numbers;

    // creo la password
    for($i=0; $i < $_GET['lunghezza']; $i++){
        // prendo un carattere randomico
         $random = rand(0, strlen($all)-1);

         $randomoCharacter= substr($all, $random, 1);

         $password .= $randomoCharacter;
    }
}
?>