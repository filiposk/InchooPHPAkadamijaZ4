<?php
require "Zaposlenik.php";

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
            print_r(Zaposlenik::$sviZaposlenici);
            echo "Želite li se vratiti na izbornik? (DA/NE)\n";
            if (strtolower(trim(fgets(STDIN))) !== 'da') {
                $bool = false;
            }


            break;
        }
        case 2:
        {
            break;
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

function chooseSource() {

    // Logic to choose source location
}