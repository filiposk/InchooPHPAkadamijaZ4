<?php

function kontrolaImenaIPrezimena($var)
{
    if($var==="" || preg_match('~[0-9]+~', $var)){
        echo "Ime/prezime ne može biti prazno i sadržavati brojeve.\nUnesite novo ime/prezime:\n";
        return kontrolaImenaIPrezimena(readline());
    }else{
        return $var;
    }
}
function kontrolaId($var,$niz)
{
    if($var===""){
        echo "Morate unijeti ID.\nUnesite novi ID:\n";
        return kontrolaId(readline(),$niz);
    }
    for($i=0;$i<count($niz);$i++){
        if($niz[$i]->getId()===$var ){
            echo "Zaposlenik s istim ID-em već postoji.\nUnesite novi ID:\n";
            return kontrolaId(readline(),$niz);
        }
    }
    return $var;
}

function kontrolaPrimanja($var)
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