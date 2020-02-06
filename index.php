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
    echo "Stampa dati persona generica";
    echo '<br>';
    echo "Nome Persona: " .$persona->nome;
    echo '<br>';
    echo "Cognome Persona: " .$persona->cognome;
    echo '<br>';
    echo "Genere Persona: " .$persona->genere;
    echo '<br>';
    try {
        echo "Retribuzione giornalinera: " .$persona->calcolaRetribuzione() .'€';
    } catch (Exception $e) {
        echo 'Retribuzione giornaliera: ' . $e->getMessage();
    }
    echo '<br>';
    echo "----------------------------";
    echo '<br>';

    // Creo un istanza della classe Dipendente
    $dipendente = new Dipendente();

    // Valorizzo gli attributi dell' oggetto dipendente
    $dipendente->nome  = 'Dario';
    $dipendente->cognome = 'Verdi';
    $dipendente->genere = 'Maschio';
    $dipendente->ruolo = 'Programmatore Web';
    $dipendente->annoDiAssunzione = '2018';
    $dipendente->dipartimento = 'Informatica';
    // Valorizzo gli attributi della classe stipendio per l'oggetto Dipendente
    $dipendente->tariffaOraria = 'gatto';
    $dipendente->tipoContratto = 'Full Time';

    // Stampa propietà dell'oggetto persona
    echo "Stampa dati persona generica";
    echo '<br>';
    echo "Nome Persona: " .$dipendente->nome;
    echo '<br>';
    echo "Cognome Persona: " .$dipendente->cognome;
    echo '<br>';
    echo "Genere Persona: " .$dipendente->genere;
    echo '<br>';
    echo "Ruolo: " .$dipendente->ruolo;
    echo '<br>';
    echo "Anno Assunzione: " .$dipendente->annoDiAssunzione;
    echo '<br>';
    echo "Dipartimento: " .$dipendente->dipartimento;
    echo '<br>';
    try {
        echo "Retribuzione giornalinera: " .$dipendente->calcolaRetribuzione() .'€';
    } catch (Exception $e) {
        echo 'Retribuzione giornaliera: ' . $e->getMessage();
    }
    echo '<br>';
    echo "----------------------------";
    echo '<br>';
 ?>
