<?php
//deel 1
$tijd = date("H:i"); 

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
    echo "<br>";
}

//deel 2
function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(5, 7);
echo "<br>";

//deel 3
$huidigeDatum = date("Y-m-d");

function dagenTotEindeJaar($datum) {
    $eindeJaar = date("Y-12-31"); 
    $verschil = strtotime($eindeJaar) - strtotime($datum);
    $dagen = ceil($verschil / (60 * 60 * 24));
    return $dagen;
}

echo "Er zijn nog " . dagenTotEindeJaar($huidigeDatum) . " dagen tot het einde van het jaar.";
echo "<br>";

//deel 4
function berekenTotaleLengte($strings) {
    $lengte = 0;

    foreach ($strings as $string) {
        $lengte += strlen($string);
    }

    return $lengte;
}

$array = array("Hallo", "Wereld", "Dit", "is", "een", "test");
echo "De totale lengte van de strings is: " . berekenTotaleLengte($array);
?>
