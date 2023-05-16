<?php
//
//$variabele1 = 10;
//$variabele2 = 10;

//if($variabele1 == $variabele2) {
//    echo "De twee waarden zijn gelijk";
//} else {

//echo "De twee waarden zijn gelijk";

//}

//$variabele1 = 10;
//$variabele2 = 12;

//if($variabele1 != $variabele2) {
//    echo "De twee waarden zijn ongelijk";
//}

//$variabele1 = 10;
//$variabele2 = 10;=

//if($variabele1 == $variabele2){
//    echo "De twee waarden zijn gelijk";
//}
    
//if($variabele1 == $variabele2){
//   echo "De twee waarden zijn gelijk";
//}
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
 <form method="GET">
 <input type="text" name="username" placeholder="username">
 <br>
 <input type="password" name="password" placeholder="password">
 <br>
 <input type="submit" name="submit">
 </form>

 <?php
    if (isset($_GET['submit'])) {

    $username = $_GET['username'];
    $password = $_GET['password'];

    echo "username: " . $username;
    echo "password: " . $password;
}
 ?>


 </body>
 </html>