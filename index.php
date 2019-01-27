<?php

class Zaposlenik
{
    private $id;
    private $ime;
    private $prezime;
    private $datumRodenja;
    private $spol;
    private $primanja;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (isset($property)) {
            $this->$property = $value;
        }else{
            echo 'potrebno je unjeti sve podatke';
        }

        return $this;
    }

    public function __construct($id, $ime, $prezime, $datumRodenja, $spol, $primanja)
    {
        $this->id($id);
        $this->ime($ime);
        $this->prezime($prezime);
        $this->datumRodenja($datumRodenja);
        $this->spol($spol);
        $this->primanja($primanja);
    }
}


$zaposlenik = new Zaposlenik();
$zaposlenik->ime = 'Filip';
$zaposlenik->prezime = 'Pavlović';

echo $zaposlenik->ime;
echo $zaposlenik->prezime;
