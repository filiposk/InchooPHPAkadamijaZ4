<?php
require "Zaposlenik.php";
include_once "kontrole.php";

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
            echo 'Upišite id korisnika kojeg zelite mjenjati';
            $id = readline();
            $sviZaposlenici = promjeniKorisnika($sviZaposlenici,$id);
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

function ispisiZaposlenike($niz) {
    echo "*************************************************\n";
    for ($i = 0; $i < count($niz); $i++) {
        echo "ID: " . $niz[$i]->getId() . "\n";
        echo "IME: " . $niz[$i]->getIme(). "\n";
        echo "PREZIME: " . $niz[$i]->getPrezime()."\n";
        echo "DATUM ROĐENJA: " . $niz[$i]->getDatumRodenja()."\n";
        echo "SPOL: " . $niz[$i]->getSpol()."\n";
        echo "MJESEČNA PRIMANJA: " . $niz[$i]->getPrimanja()."\n";
        echo "*************************************************\n";
    }
}

function unosZaposlenika($niz = null)
{
    echo "ID: ";
    $id = kontrolaId(readline(),$niz);
    echo "Ime: ";
    $ime = kontrolaImenaIPrezimena(readline());
    echo "Prezime: ";
    $prezime = kontrolaImenaIPrezimena(readline());
    echo "Datum rođenja (dd.mm.yyyy): ";
    $datumRodenja = kontrolaDatum(readline());
    echo "Spol: ";
    $spol = kontrolaSpol(readline());
    echo "Mjesečna primanja: ";
    $primanja = kontrolaPrimanja(readline());
    return new Zaposlenik($id, $ime, $prezime, $datumRodenja, $spol, $primanja);
}

function promjeniKorisnika($niz,$zaposlenikId){
    for ($i=0;$i<count($niz);$i++){
        if ($niz[$i]->getId()=== $zaposlenikId){
            echo "Koji podatak želite promijeniti (1-6)?\n";
            echo "1. ID\n";
            echo "2. IME\n";
            echo "3. PREZIME\n";
            echo "4. DATUM ROĐENJA\n";
            echo "5. SPOL\n";
            echo "6. MJESEČNA PRIMANJA\n";
            switch (readline())
            {
                case 1:
                {
                    echo 'Stara vrijednost id-a je :'. $niz[$i]->getId() . "\n";
                    echo 'Nova vrijednost je :'. "\n";
                    $niz[$i]->setId(kontrolaId(readline(),$niz));
                    break;
                }
                case 2:
                {
                    echo 'Stara vrijednost imena je :' . $niz[$i]->getIme() . "\n";
                    echo 'Nova vrijednost imena je :' . "\n";
                    $niz[$i]->setIme(kontrolaImenaIPrezimena(readline(),$niz));
                    break;
                }
                case 3:
                {
                    echo 'Stara vrijednost prezimena je :' . $niz[$i]->getPrezime() . "\n";
                    echo 'Nova vrijednost prezimena je :' . "\n";
                    $niz[$i]->setPrezime(kontrolaImenaIPrezimena(readline(),$niz));
                    break;
                }
                case 4:
                {
                    echo 'Stara vrijednost datuma rođenja je:' . $niz[$i]->getDatumRodenja() . "\n";
                    echo 'Nova vrijednost datuma rođenja je :';
                    $niz[$i]->setDatumRodenja(kontrolaDatum(readline(),$niz));
                    break;
                }
                case 5:
                {
                    echo 'Stara vrijednost spola je:' . $niz[$i]->getSpol() . "\n";
                    echo 'Nova vrijednost spola je :';
                    $niz[$i]->setSpol(kontrolaSpol(readline(),$niz));
                    break;
                }
                case 6:
                {
                    echo 'Stara vrijednost primanja je:' . $niz[$i]->getPrimanja() . "\n";
                    echo 'Nova vrijednost primanja je :';
                    $niz[$i]->setPrimanja(kontrolaPrimanja(readline(),$niz));
                    break;
                }

            }
        }
    }
}
