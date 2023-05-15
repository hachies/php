<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Inloggen"><br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "Ingevoerde gebruikersnaam: " . $username . "<br>";
        echo "Ingevoerd wachtwoord: " . $password . "<br>";
    }
    ?>

<?php
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk" . "<br>";
} else {
    echo "De twee waarden zijn ongelijk" . "<br>";
}

$variabele1 = 10;
$variabele2 = 12;

if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk" . "<br>";
}

$variabele1 = 10;
$variabele2 = 10;


if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk" . "<br>";
} else {
    echo "De twee waarden zijn ongelijk" . "<br>";
}

?>
</html>