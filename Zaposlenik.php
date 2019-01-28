<?php

class Zaposlenik
{
    protected $id;
    protected $ime;
    protected $prezime;
    protected $datumRodenja;
    protected $spol;
    protected $primaotected;

    public function __construct($id, $ime, $prezime, $datumRodenja, $spol, $primanja)
    {
        $this->id=$id;
        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->datumRodenja=$datumRodenja;
        $this->spol=$spol;
        $this->primanja=$primanja;

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
}



