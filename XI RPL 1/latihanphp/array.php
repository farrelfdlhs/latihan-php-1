<?php
//array numeric
$a = array('rel', 21, true, 45.6);
for ($i=0; $i < count($a); $i++) { 
    echo $a[$i]. "<br>";
}
echo "<br>";
//array asosiatif
$aso = ['nama'=>'rel', 'umur'=>17, 'alamat'=>'sukamenak'];
foreach ($aso as $key) {
    echo $key . "<br>";
}
?>