<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
    require "animal.php";
    require "ape.php";
    require "frog.php";

    $sheep = new Animal("Shaun");
    $kodok = new Frog("Buduk");
    $sungokong = new Ape("Kera Sakti");

    echo "Name: " . $sheep->name . "<br>";
    echo "Legs: " . $sheep->legs . "<br>";
    echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>";
    
    echo "Name: " . $kodok->name . "<br>";
    echo "Legs: " . $kodok->legs . "<br>";
    echo "Cold Blooded: " . $kodok->cold_blooded . "<br>";
    echo "Jump : ";
    echo $kodok->jump() . "<br><br>";

    echo "Name: " . $sungokong->name . "<br>";
    echo "Legs: " . $sungokong->legs . "<br>";
    echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
    echo "Yell : "; echo $sungokong->yell() . "<br><br>";

    ?>
</body>
</html>