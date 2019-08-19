<?php

    $saldoawal = 1000000;
    $bunga = 0.03;
    $jumlah1 = $saldoawal*$bunga;
    $jumlah2 = $saldoawal*11;
    $jumlah3 = $jumlah2+$jumlah1*11;

    echo "Jumlah Saldo Akhir setelah 11 Bulan = $jumlah3 <br><br>";


    $bilangan = 100;
    $pembagi = 3;
    $hasilbagi = $bilangan/$pembagi;
    $sisabagi = $bilangan%$pembagi;

    printf ("$bilangan dibagi dengan $pembagi adalah %.0f Dengan sisa $sisabagi", $hasilbagi);
    // echo  " Dengan sisa bagi adalah " .$sisabagi;
?>