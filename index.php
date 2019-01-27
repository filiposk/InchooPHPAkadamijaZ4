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
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}

$zaposlenik = new Zaposlenik();
$zaposlenik->ime = 'Filip';

echo $zaposlenik->ime;