<?php

    $a = [1, 2, 4, 'hello world!',];
    echo $a[3].'<br>';

    for ($i=0; $i < count($a); $i++) { 
        echo 'index array ke-'.$i.' dengan isi data '.$a[$i]. '<br>';
    }

?>