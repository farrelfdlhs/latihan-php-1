<?php

$mobil= array(

array("Volvo", 22, 18), 

array("BMW", 15, 13), 

array("Saab", 5, 2),

array("Land Rover", 17, 15)
);


$num=0;

foreach ($mobil as $data)
{
$num++; 
echo "<br><b>Data Mobil $num</b><br>";
foreach ($data as $key => $value)
{
echo "<li>$value <br>";

}
}
?>