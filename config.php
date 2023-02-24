<?php
$server = "localhost";
$username = "root";
$pass = "2501";
$db = "mydb";


$conn = mysqli_connect($server, $username, $pass, $db);

if (!$conn) {
    die ("Conexão falhou" . mysqli_connect_error());
}

//echo "success";

?>
