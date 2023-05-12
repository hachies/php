<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $variabele1 = 10;
    $variabele2 = 10;

    if ($variabele1 == $variabele2) {
        echo "De twee waarden zijn gelijk";
    }
    $variabele1 = 10;
    $variabele2 = 10;
    
    if ($variabele1 != $variabele2) {
        echo "De twee waarden zijn ongelijk";
    }
    ?>
<form method="post" action="">
        <lable for="username">Gebruikersnaam:</lable>
        <input type="text" id="username" name="username">
        <lable for="password" id="password" name="password">
        <input type="password" id="password" name="password">
        <input type="submit" value="Inloggen">
</form>
        
    
</body>
</html>