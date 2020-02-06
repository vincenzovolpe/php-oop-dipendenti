<?php

    include_once 'Persona.php';
    include_once 'Dipendente.php';
    include_once 'Stipendio.php';

    // Creo un istanza della classe Persona
    $persona = new Persona();

    // Valorizzo gli attributi dell' oggetto persona
    $persona->nome  = 'Mario';
    $persona->cognome = 'Rossi';
    $persona->genere = 'Maschio';
    // Valorizzo gli attributi della classe stipendio per l'oggetto Persona
    $persona->oreDiLavoro = 5;
    $persona->tariffaOraria = 15;
    $persona->tipoContratto = 'A progetto';

    // Stampa propietà dell'oggetto persona
    echo "Nome Persona: " .$persona->nome;
    echo '<br>';
    echo "Cognome Persona: " .$persona->cognome;
    echo '<br>';
    echo "Genere Persona: " .$persona->genere;
    echo '<br>';
    echo "Retribuzione giornalinera: " .$persona->calcolaRetribuzione() .'€';
    echo '<br>';
    echo "----------------------------";
    echo '<br>';

 ?>
