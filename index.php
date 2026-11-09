
<?php

// Definizione delle 4 variabili

$eta = 32;                  // Integer
$prezzo = 19.99;            // Float
$nome = "Donato";           // String
$studente = true;           // Boolean

// Definizione della costante
const nome = "Donato";

// Visualizzazione del tipo di dato
var_dump($eta);
var_dump($prezzo);
var_dump($nome);
var_dump($studente);

// Visualizzazione del valore della costante

echo nome;

// Prova a cambiare il valore della costante
const nome = "Luigi";

?>