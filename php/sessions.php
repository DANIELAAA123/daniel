<?php
session_start();
$naam = $_SESSION['naam'];
$leeftijd = $_SESSION['email'];

echo $naam . ' ' . $email;

session_destroy();
?>