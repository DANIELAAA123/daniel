<?php
// && ||
session_start();
    if(isset($_POST['knop'])) {
        if (isset($_POST['naam']) && isset($_POST['email'])) {
        $_POST['naam'] = $_SESSION['naam'];
        $_POST['email'] = $_SESSION['email'];
        header('location:session.php');
        }
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
    <form method="POST">
        <input type="text" name="naam">
        <input type="text" name="email">
        <input type="text" name="knop">
</form>
</body>
</html>