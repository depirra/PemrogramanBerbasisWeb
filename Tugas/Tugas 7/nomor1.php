<?php
    $jumlah_roda = 10;

    switch ($jumlah_roda){
        case "2":
            echo "Motor";
            break;
        case "3":
            echo "Bajaj";
            break;
        case "4":
            echo "Mobil";
            break;
        case "6":
            echo "Bus";
            break;
        case "10":
            echo "Truk Tronton";
            break;
        default:
            echo "Kendaraan Tidak Diketahui!";
    }
?>
