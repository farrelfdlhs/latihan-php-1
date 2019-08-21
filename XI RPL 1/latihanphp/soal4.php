<?php

    $barang = ["Nama barang" => 'buku tulis', "harga" => 4000, "berat" => "100 gram"];

    // for ($i=1; $i <= 1; $i++) { 
    //     echo "barang : ".$barang[0]."<br>";
    //     echo "harga : ".$barang[1]."<br>";
    //     echo "berat : ".$barang[2]." gram<br>";
    // }

        foreach ($barang as $key => $value) {
            echo $key ." : " .$value."<br>";
        }
?>