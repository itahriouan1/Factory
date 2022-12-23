<?php

require 'Faker.php';
require 'FakerAR.php';
require 'FakerFR.php';
require 'FakerFActory.php';
require 'AbstractFakerCreator.php';
require 'FakerARCreator.php';
require 'FakerFRCreator.php';

if(isset($_POST["faker"])){
    $F = FakerFactory::create($_POST["faker"]);
    var_dump($F);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <select name="faker" id="">
            <option value="FR">personne Française</option>
            <option value="AR">Personne Arabe</option>
        </select>

        <input type="submit" value="créer">
    </form>
</body>
</html>
