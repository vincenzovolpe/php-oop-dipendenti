<?php

trait Stipendio
{
    public $oreDiLavoro;
    public $tariffaOraria;
    public $tipoContratto;

    public function calcolaRetribuzione() {

        if ($this->tipoContratto == 'A progetto') {
            if (!is_int($this->tariffaOraria) or !is_int($this->oreDiLavoro)) {
                throw new Exception('Hai inserito un valore non intero!');
            }
            return $this->tariffaOraria * $this->oreDiLavoro;
        } elseif ($this->tipoContratto == 'Full Time') {
            if (!is_int($this->tariffaOraria)) {
                throw new Exception('Hai inserito un valore non intero!');
            }
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
