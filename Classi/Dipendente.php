<?php
    include_once 'Classi/Persona.php';

    class Dipendente extends Persona
    {

        public $matricola;
        public $ruolo;
        public $annoDiAssunzione;
        public $dipartimento;

        public function __costruct($matricola,  $ruolo, $tipoContratto)
        {
            parent::__construct($nome, $cognome, $genere);
            $this->matricola = $matricola;
            $this->ruolo = $ruolo;
            $this->tipoContratto = $tipoContratto;
        }

        public function creaMatricola() {
            return rand(1, 1000);
        }
    }
?>
