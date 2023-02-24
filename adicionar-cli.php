
<?php
include "config.php";

if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $remoudest = $_POST['remoudest'];

    $sql = "INSERT INTO cliente (`CPF`, `Nome`, `Email`, `Telefone`, `Bairro`, `Rua`, `Numero`, `RemOuDest`, `CEP`) values ('$cpf', '$nome', '$email', '$telefone', '$bairro', '$rua', '$numero', '$remoudest', '$cep')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Registrado com sucesso");
    }
    else{
        echo "Falhaste " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-2/css/all.min.css" integrity="sha512-uNOFYDWi8Y7/BN/9S2QDx/BVTEvSwdrZ53NHLgt+fDTdyQeOwmBpHrLrxOT3TQn78H0QKJWLvD7hsDOZ9Gk45A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Formulario</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-2" style="background-color: #191970; color:white">
        Adicionar cliente à base de dados da ZIP Transportadora
    </nav>
    <div class="container">
        <div class="text-center">
            <h3>Adicionar cliente</h3>
            <p class="text-muted"> Completar o formulário abaixo</p>
        </div>
        <div class="container">
            <form action="" method="post" style="margin: 0 auto; width:18vw; min-width:190px;">

                <label for="cpf">CPF</label><br>
                <input type="text" id="cpf" name="cpf"><br>

                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome"><br>

                <label for="tel">Email:</label><br>
                <input type="text" id="email" name="email">

                <br><label for="tel">Telefone:</label><br>
                <input type="text" id="tel" name="telefone">

                <br><label for="bairro">Bairro:</label><br>
                <input type="text" id="bairro" name="bairro">

                <br><label for="rua">Rua:</label><br>
                <input type="text" id="rua" name="rua">

                <br><label for="numero">Numero:</label><br>
                <input type="text" id="num" name="numero">

                <br><label for="numero">CEP:</label><br>
                <input type="text" id="cep" name="cep">
                <div class = "form-group mb-1">
                    <input type="radio" class="form-check-input" name="remoudest" id="r" value="R"></input>
                    <label for="R"class="form-input-label">Remetente</label> &nbsp;
                    <input type="radio" class="form-check-input" name="remoudest" id="d" value="D"></input>
                    <label for="D"class="form-input-label">Destinatário</label>&nbsp;
                </div>
        </div>
        <div style= "text-align: center; width:95%">
            <button type="submit" class="btn btn-success" name="submit">Adicionar</button>
            <a href="index.php" class="btn btn-danger">Voltar</a>   
        </div>
            </form>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>