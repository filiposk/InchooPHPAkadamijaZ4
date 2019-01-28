<?php
require "Zaposlenik.php";

$sviZaposlenici = [];
while( true ) {

    // Print the menu on console
    ispisIzbornika();

    // Read user choice
    $choice = trim( fgets(STDIN) );

    // Exit application
    if( $choice == 6 ) {

        break;
    }

    // Act based on user choice
    switch( $choice ) {

        case 1:
        {
            {
                ispisiZaposlenike($sviZaposlenici);
                echo "Želite li se vratiti na izbornik? (DA/NE)\n";
                if (strtolower(trim(fgets(STDIN))) !== 'da') {
                    $bool = false;
                }
                break;
            }
        }
        case 2:
        {{
            echo "Upišite sve potrebne podatke: \n";
            $sviZaposlenici[] = unosZaposlenika($sviZaposlenici);
            break;
        }
        }
        case 3:
        {
            break;
        }
        case 4:
        {
            break;
        }
        default:
        {
            echo "\n\nNo choice is entered. Please provide a valid choice.\n\n";
        }
    }
}

function ispisIzbornika() {

    echo "************ Izbornik ******************\n";
    echo "1 - Pregled Zaposlenika\n";
    echo "2 - Unos novog Zaposlenika\n";
    echo "3 - Promjena podataka postojećem zaposleniku\n";
    echo "4 - Brisanje Zaposlenika\n";
    echo "5 - Statistika\n";
    echo "6 - Izlaz\n";
}

function ispisiZaposlenike($array) {
    echo "*************************************************\n";
    for ($i = 0; $i < count($array); $i++) {
        echo "ID: " . $array[$i]->getId() . "\n";
        echo "IME: " . $array[$i]->getIme(). "\n";
        echo "PREZIME: " . $array[$i]->getPrezime()."\n";
        echo "DATUM ROĐENJA: " . $array[$i]->getDatumRodenja()."\n";
        echo "SPOL: " . $array[$i]->getSpol()."\n";
        echo "MJESEČNA PRIMANJA: " . $array[$i]->getPrimanja()."\n";
        echo "*************************************************\n";
    }
}

function unosZaposlenika($array = null)
{
    echo "ID: ";
    $id = kontrolaId(readline(),$array);
    echo "Ime: ";
    $ime = kontrolaImenaIPrezimena(readline());
    echo "Prezime: ";
    $prezime = kontrolaImenaIPrezimena(readline());
    echo "Datum rođenja (dd.mm.yyyy): ";
    $datumRodenja = kontrolaDatum(readline());
    echo "Spol: ";
    $spol = kontrolaSpol(readline());
    echo "Mjesečna primanja: ";
    $mjesecnaPrimanja = kontrolaMjesecnoPrimanje(readline());
    return new Zaposlenik($id, $ime, $prezime, $datumRodenja, $spol, $mjesecnaPrimanja);
}

function kontrolaImenaIPrezimena($var)
{
    if($var==="" || preg_match('~[0-9]+~', $var)){
        echo "Ime/prezime ne može biti prazno i sadržavati brojeve.\nUnesite novo ime/prezime:\n";
        return kontrolaImenaIPrezimena(readline());
    }else{
        return $var;
    }
}
function kontrolaId($var,$array)
{
    if($var===""){
        echo "Morate unijeti ID.\nUnesite novi ID:\n";
        return kontrolaId(readline(),$array);
    }
    for($i=0;$i<count($array);$i++){
        if($array[$i]->getId()===$var ){
            echo "Zaposlenik s istim ID-em već postoji.\nUnesite novi ID:\n";
            return kontrolaId(readline(),$array);
        }
    }
    return $var;
}

function kontrolaMjesecnoPrimanje($var)
{
    var_dump($var);
    $var = floatval(str_replace(",",".",$var));
    var_dump($var);
    if($var==="" || !is_float($var) || $var<=0){
        echo "Mjesečno primanje mora biti decimalan broj veći od 0.\nUnesite novu vrijednost:\n";
        return kontrolaMjesecnoPrimanje(readline());
    }else{
        return number_format($var,2,'.','');
    }
}

function kontrolaDatum($var)
{
    $var = str_replace(["-","/","'\'"], ".",$var);
    $format = "d.m.Y";
    $d = DateTime::createFromFormat($format, $var);
    if($var==="" || preg_match("/^[a-zA-Z]+$/", $var) || $d->format($format)!==$var){
        echo "Morate upisati datum formata dd.mm.yyyy.\nUnesite novu vrijednost:\n";
        return kontrolaDatum(readline());
    }else{
        return $var;
    }
}

function kontrolaSpol($var)
{
    var_dump($var);
    if($var==="" || ($var !== "muški" && $var !== "ženski")){
        echo "Spol može biti muški ili ženski.\nUnesite novu vrijednost:\n";
        return kontrolaSpol(readline());
    }else{
        return $var;
    }
}
