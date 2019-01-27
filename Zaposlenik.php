<?php

class Zaposlenik
{
    private $id;
    private $ime;
    private $prezime;
    private $datumRodenja;
    private $spol;
    private $primanja;

    public static $sviZaposlenici = array;
    public function __construct($id, $ime, $prezime, $datumRodenja, $spol, $primanja)
    {
        $this->getId($id);
        $this->getIme($ime);
        $this->getPrezime($prezime);
        $this->getDatumRodenja($datumRodenja);
        $this->getSpol($spol);
        $this->getPrimanja($primanja);

        return $sviZaposlenici[] = $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * @param mixed $ime
     */
    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    /**
     * @return mixed
     */
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * @param mixed $prezime
     */
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }

    /**
     * @return mixed
     */
    public function getDatumRodenja()
    {
        return $this->datumRodenja;
    }

    /**
     * @param mixed $datumRodenja
     */
    public function setDatumRodenja($datumRodenja)
    {
        $this->datumRodenja = $datumRodenja;
    }

    /**
     * @return mixed
     */
    public function getSpol()
    {
        return $this->spol;
    }

    /**
     * @param mixed $spol
     */
    public function setSpol($spol)
    {
        $this->spol = $spol;
    }

    /**
     * @return mixed
     */
    public function getPrimanja()
    {
        return $this->primanja;
    }

    /**
     * @param mixed $primanja
     */
    public function setPrimanja($primanja)
    {
        $this->primanja = $primanja;
    }



//    public function __get($property) {
//        if (property_exists($this, $property)) {
//            return $this->$property;
//        }
//    }
//
//    public function __set($property, $value) {
//        if (isset($property)) {
//            $this->$property = $value;
//        }else{
//            echo 'potrebno je unjeti sve podatke';
//        }
//
//        return $this;
//    }


//    public function Ispis()
//    {
//        return $this->$zaposlenik->ime;
//    }
}


$zaposlenik = new Zaposlenik();
$zaposlenik->setId(1);
$zaposlenik->setIme('Filip');
$zaposlenik->setPrezime('Pavlović');
$zaposlenik->setDatumRodenja('10-10-1989');
$zaposlenik->setSpol(1);
$zaposlenik->setPrimanja(300);
