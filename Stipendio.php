<?php

trait Stipendio
{
    public $oreDiLavoro;
    public $tariffaOraria;
    public $tipocontratto;

    public function calcolaRetribuzione() {
        if (!is_int($this->tariffaOraria) or !is_int($this->oreDiLavoro)) {
            throw new Exception('Hai inserito un valore non intero!');
        }
        if ($this->$tipocontratto = "A progetto") {
            return $this->tariffaOraria * $this->oreDiLavoro;
        } elseif ($this->$tipocontratto = "Full-Time") {
            return $this->tariffaOraria * 8;
        } else {
            return "Nessuna retribuzione presente";
        }
    }

    public function calcoloStipendioAnnuale() {
        return $this->calcolaRetribuzione() * 365;
    }

    public function calcoloStipendioMese() {
        return $this->calcoloStipendioAnnuale() / 12;
    }
}

?>
