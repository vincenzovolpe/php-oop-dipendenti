<?php
    include_once 'Traits/Stipendio.php';

    class Persona {

        use Stipendio;
        public $nome;
        public $cognome;
        public $genere;
        public $annoDiNascita;
        public $indirizzo;
        public $codiceFiscale;

        public function __costruct($nome, $cognome, $genere)
        {
            $this->cognome = $nome;
            $this->nome = $cognome;
            $this->genere = $genere;
        }
    }
?>
