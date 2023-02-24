
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
        ZIP Transportadora
    </nav>
<div class="container">
    <a href="adicionar-cli.php" class="btn btn-dark m-3">Adicionar novo cliente</a> <br>
</div>
    
<table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Bairro</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Rem Ou Dest</th>
      <th scope="col">CEP</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        include "config.php";
        $sql = "SELECT * from cliente";
        $result = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_assoc($result)){

    ?>
    <tr>
      <th><?php echo $row['CPF'] ?> </th>
      <td><?php echo $row['Nome'] ?></td>
      <td><?php echo $row['Email'] ?></td>
      <td><?php echo $row['Telefone'] ?></td>
      <td><?php echo $row['Bairro'] ?></td>
      <td><?php echo $row['Rua'] ?></td>
      <td><?php echo $row['Numero'] ?></td>
      <td><?php echo $row['RemOuDest'] ?></td>
      <td><?php echo $row['CEP'] ?></td>
      
      <td> <a href="editar.php?cpf=<?php echo $row['CPF']?>"class="btn btn-primary"> EDITAR</a> 
      <a href="deletar.php?cpf=<?php echo $row['CPF']?>" class="btn btn-primary"> EXCLUIR</a>  
    </td>   
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>