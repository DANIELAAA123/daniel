<?php


    // $naam = $_GET["naam"];
    // $achternaam = $_GET["achternaam"];
    // $leeftijd = $_GET["leeftijd"];
    // $adres = $_GET["adres"];
    // $email = $_GET["email"];

    // echo $naam . " " . $achternaam . " " . $leeftijd . " " . $adres . " " . $email;

    $naam = $_POST["naam"];
    $achternaam = $_POST["achternaam"];
    $leeftijd = $_POST["leeftijd"];
    $adres = $_POST["adres"];
    $email = $_POST["email"];

    echo $naam . " " . $achternaam . " " . $leeftijd . " " . $adres . " " . $email;



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
    <!-- <form method="GET">
        <input type="text" name="naam" placeholder="naam">
        <br>
        <input type="text" name="achternaam" placeholder="achternaam">
        <br>
        <input type="text" name="leeftijd" placeholder="leeftijd">
        <br>
        <input type="text" name="adres" placeholder="adres">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="submit" name="login"> -->

        <form method="POST">
        <input type="text" name="naam" placeholder="naam">
        <br>
        <input type="text" name="achternaam" placeholder="achternaam">
        <br>
        <input type="text" name="leeftijd" placeholder="leeftijd">
        <br>
        <input type="text" name="adres" placeholder="adres">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="submit" name="login">


</body>
</html>
