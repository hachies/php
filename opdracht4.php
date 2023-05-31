<?php

//deel 1
for ($a = 0; $a <= 50; $a++) {
    echo $a . " ";
}

//deel 2
$klasgenoten = array ("klasgenoot 1" , "klasgenoot 2", "klasgenoot 3", "klasgenoot 4", "klasgenoot 5", "klasgenoot 6", "klasgenoot 7", "klasgenoot 8", "klasgenoot 9", "klasgenoot 10");


foreach ($klasgenoten as $klasgenoot) {
    echo $klasgenoot . "<br>";
}

//deel 3/4
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

$aantalmaanden = count ($maanden);

foreach ($maanden as $b => $maand) {
    echo 'Maand ' . ($b + 1) . ' is ' . $maand . '<br />';
}
?>