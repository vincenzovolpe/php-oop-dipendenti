<?php
    include_once 'Persona.php';
    include_once 'Stipendio.php';

    class Dipendente
    {
        use Stipendio;
        public $matricola;
        public $ruolo;
        public $annoDiAssunzione;
        public $dipartimento;

        public function __costruct($matricola,  $ruolo, $tipoContratto)
        {
            parent::__construct($nome, $cognome, $genere);
            $this->matricola = $this->creaMatricola();
            $this->ruolo = $ruolo;
            $this->tipoContratto = $tipoContratto;
        }

        public function creaMatricola() {
            return rand(1, 1000);
        }
    }
?>
