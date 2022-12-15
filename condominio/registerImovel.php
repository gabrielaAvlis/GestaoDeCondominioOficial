<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
   <!--Container, tamanho do layout padrão-->
  <div class="container">
    <div class="row">
      <?php
      include "conexao.php";  
	    $endereco = $_POST['endereco'];
      $complemento = $_POST['complemento'];
      $cidade = $_POST['cidade'];
	    $UF = $_POST['UF'];
	    $CEP = $_POST['CEP'];
      $email = $_POST['email'];
      $contato = $_POST['contato'];
      
      $sql = "INSERT INTO `imoveis`( `endereco`, `complemento`, `cidade`, `UF`, `CEP`, `email`, `contato`,) VALUES ('$endereco','$complemento','$cidade','$UF','$CEP', '$email', '$contato')";

      if (mysqli_query($conn, $sql)){
	      mensagem( "Imovel cadastrado com sucesso!",'info');
      } else
	      mensagem( "Imovel NÃO foi cadastrado!", 'danger');
    ?>
    <a href="cadastroDeImovel.php" class="btn btn-primary">Voltar</a>
    </div>
  </div>
    
 </body>
</html>
