<?php

    include_once 'Classi/Persona.php';
    include_once 'Classi/Dipendente.php';
    include_once 'Classi/Responsabile.php';
    include_once 'Traits/Stipendio.php';

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
    echo "Nome: " .$persona->nome;
    echo '<br>';
    echo "Cognome: " .$persona->cognome;
    echo '<br>';
    echo "Genere: " .$persona->genere;
    echo '<br>';
    try {
        echo "Retribuzione giornalinera: €" .$persona->calcolaRetribuzione();
    } catch (Exception $e) {
        echo 'Retribuzione giornaliera: €' . $e->getMessage();
    }
    echo '<br>';
    echo "Retribuzione mensile: €" .$persona->calcoloStipendioMese();
    echo '<br>';
    echo "Retribuzione annuale: €" .$persona->calcoloStipendioAnnuale();
    echo '<br>';
    echo "----------------------------";
    echo '<br>';

    // Creo un istanza della classe Dipendente
    $dipendente = new Dipendente();

    // Valorizzo gli attributi dell' oggetto dipendente
    $dipendente->matricola  = $dipendente->creaMatricola();
    $dipendente->nome  = 'Dario';
    $dipendente->cognome = 'Verdi';
    $dipendente->genere = 'Maschio';
    $dipendente->ruolo = 'Programmatore Web';
    $dipendente->annoDiAssunzione = '2018';
    $dipendente->dipartimento = 'Informatica';
    // Valorizzo gli attributi della classe stipendio per l'oggetto Dipendente
    $dipendente->tariffaOraria = 15;
    $dipendente->tipoContratto = 'Full Time';


    // Stampa propietà dell'oggetto dipendente
    echo "Stampa dati del dipendente";
    echo '<br>';
    echo "Matricola: " .$dipendente->matricola;
    echo '<br>';
    echo "Nome: " .$dipendente->nome;
    echo '<br>';
    echo "Cognome: " .$dipendente->cognome;
    echo '<br>';
    echo "Genere: " .$dipendente->genere;
    echo '<br>';
    echo "Ruolo: " .$dipendente->ruolo;
    echo '<br>';
    echo "Anno Assunzione: " .$dipendente->annoDiAssunzione;
    echo '<br>';
    echo "Dipartimento: " .$dipendente->dipartimento;
    echo '<br>';
    try {
        echo "Retribuzione giornalinera: €" .$dipendente->calcolaRetribuzione();
    } catch (Exception $e) {
        echo 'Retribuzione giornaliera: ' . $e->getMessage();
    }
    echo '<br>';
    echo "Retribuzione mensile: €" .$dipendente->calcoloStipendioMese();
    echo '<br>';
    echo "Retribuzione annuale: €" .$dipendente->calcoloStipendioAnnuale();
    echo '<br>';
    echo "----------------------------";
    echo '<br>';

    // Creo un istanza della classe Dipendente
    $responsabile = new Responsabile();

    // Valorizzo gli attributi dell' oggetto dipendente
    $responsabile->matricola  = $responsabile->creaMatricola();
    $responsabile->nome  = 'Vincenzo';
    $responsabile->cognome = 'Bianchi';
    $responsabile->genere = 'Maschio';
    $responsabile->ruolo = 'Amministratore';
    $responsabile->annoDiAssunzione = '2010';
    $responsabile->dipartimento = 'Amministrazione';
    $responsabile->progetto = 'Costruzione Sistema Informativo Aziendale';
    // Valorizzo gli attributi della classe stipendio per l'oggetto Dipendente
    $responsabile->tariffaOraria = 30;
    $responsabile->tipoContratto = 'Full Time';


    // Stampa propietà dell'oggetto responsabile
    echo "Stampa dati del Responsabile";
    echo '<br>';
    echo "Matricola: " .$responsabile->matricola;
    echo '<br>';
    echo "Nome: " .$responsabile->nome;
    echo '<br>';
    echo "Cognome: " .$responsabile->cognome;
    echo '<br>';
    echo "Genere: " .$responsabile->genere;
    echo '<br>';
    echo "Ruolo: " .$responsabile->ruolo;
    echo '<br>';
    echo "Anno Assunzione: " .$responsabile->annoDiAssunzione;
    echo '<br>';
    echo "Dipartimento: " .$responsabile->dipartimento;
    echo '<br>';
    echo "Progetto: " .$responsabile->progetto;
    echo '<br>';
    try {
        echo "Retribuzione giornalinera: €" .$responsabile->calcolaRetribuzione();
    } catch (Exception $e) {
        echo 'Retribuzione giornaliera: ' . $e->getMessage();
    }
    echo '<br>';
    echo "Retribuzione mensile: €" .$responsabile->calcoloStipendioMese();
    echo '<br>';
    echo "Retribuzione annuale: €" .$responsabile->calcoloStipendioAnnuale();
    echo '<br>';
    echo "----------------------------";
    echo '<br>';
 ?>
