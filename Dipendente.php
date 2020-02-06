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

        public function __costruct($ruolo, $tipoContratto)
        {
            parent::__construct($nome, $cognome, $genere);
            $this->ruolo = $ruolo;
            $this->tipoContratto = $tipoContratto;
        }
    }
?>
