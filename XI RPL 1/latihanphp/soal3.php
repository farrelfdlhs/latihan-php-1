<?php

    for ($i=1; $i <= 10; $i++) { 
        echo "<br>";
        echo "Hitung perkalian ".$i."<br>";
        for ($j=1; $j <= 10; $j++) { 
            $k = $i*$j;
            if ($k % 2 == 1) {
                echo $i . " X ". $j . " = $k adalah bilangan ganjil<br>";
            }else {
                echo $i . " X ". $j . " = $k adalah bilangan genap<br>";
            }
        }
    }


?>