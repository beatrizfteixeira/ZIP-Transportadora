<?php
include "config.php";

$cpf = $_GET['cpf'];
$sql = "DELETE FROM `cliente` WHERE CPF = $cpf";
$result = mysqli_query($conn, $sql);

if($result) {
    header("Location: index.php?,sg=Deletado com sucesso");
}
else {
    echo "Falhaste !";
}

?>


