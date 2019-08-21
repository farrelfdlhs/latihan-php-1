<?php

    echo "Nama      : Farrel Fadilah S<br>";
    echo "Kelas     : XI RPL 1";
    echo "<hr>";

    $bahasa = 90;
    $mtk = 101;
    if (($bahasa > 100) or ($mtk > 100)) {
        echo "Nilai yang anda masukkan Salah";
    } else {
        $rata = ($bahasa+$mtk)/2;
    echo "Nilai B. Indonesia = $bahasa<br>";
    echo "Nilai Matematika   = $mtk<br>";
    

    if ($rata > 100) {
        echo "Nilai yang anda masukkan salah";
    }  elseif ($rata <= 0) {
        echo "Nilai yang anda masukkan salah";
    }   elseif ($rata > 85) {
        echo "Rata Rata          = $rata<br>";
        echo "Keterangan    = <b>Lulus</b><br>";
        echo "Grade         = <b>A</b>";
        
    }  elseif ($rata > 75) {
        echo "Rata Rata          = $rata<br>";
        echo "Keterangan    = <b>Lulus</b><br>";
        echo "Grade         = <b>B</b>";
    } elseif ($rata > 60) {
        echo "Rata Rata          = $rata<br>";
        echo "Keterangan    = <b>Lulus</b><br>";
        echo "Grade         = <b>C</b>";
    } elseif ($rata < 60) {
        echo "Rata Rata          = $rata<br>";
        echo "Keterangan    = <b>Tidak Lulus</b><br>";
        echo "Grade         = <b>D</b>";
    } 
    }
    

?>