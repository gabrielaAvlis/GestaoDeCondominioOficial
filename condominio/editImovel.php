<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>

<?php
include "conexao.php";
  $id = $_GET['id'] ??'';
  $sql = "SELECT * FROM imoveis WHERE cod_imovel = $id";

  $dados = mysqli_query($conn, $sql);
  $linha = mysqli_fetch_assoc($dados);
?>
   <!--Container, tamanho do layout padrão-->
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro de Imovel</h1>
        <form action="editRegisterCliente.php" method="POST">
          <div class="form-group">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Rua, Trav, Bairro, Nº" value="<?php echo $linha['endereco'];?>">
          </div>
          <div class="form-group">
            <label for="complemento" class="form-label">complemento</label>
            <input type="text" class="form-control" name="complemento" placeholder="Apartamento, casa, kitnet" value="<?php echo $linha['complemento'];?>">
          </div>
          <div class="form-group">
            <label for="cidade" class="form-label">cidade</label>
            <input type="text" class="form-control" name="cidade" value="<?php echo $linha['cidade'];?>">
          </div>
          <div class="form-group">
            <label for="UF" class="form-label">UF</label>
            <select id="UF" class="form-select" name="UF" value="<?php echo $linha['UF'];?>">
              <option selected></option>
              <option>AC</option>
              <option>AL</option>
              <option>AP</option>
              <option>AM</option>
              <option>BA</option>
              <option>CE</option>
              <option>DF</option>
              <option>ES</option>
              <option>GO</option>
              <option>MA</option>
              <option>MT</option>
              <option>MS</option>
              <option>MG</option>
              <option>PA</option>
              <option>PB</option>
              <option>PR</option>
              <option>PE</option>
              <option>PI</option>
              <option>RJ</option>
              <option>RN</option>
              <option>RS</option>
              <option>RO</option>
              <option>RR</option>
              <option>SC</option>
              <option>SP</option>
              <option>SE</option>
              <option>TO</option>
              <option>Nenhuma das alternativas</option>
            </select>
          </div>
          <div class="form-group">
            <label for="CEP" class="form-label">CEP</label>
            <input type="text" class="form-control" name="CEP" value="<?php echo $linha['CEP'];?>" >
          </div>
          <div class="form-group">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $linha['email'];?>">
          </div>
          <div class="form-group">
            <label for="contato" class="form-label">contato</label>
            <input type="text" class="form-control" name="contato" value="<?php echo $linha['contato'];?>">
          </div>
          <br></br>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Salvar Alterações">
            <input type="hidden" name="id" value="<?php echo $linha['cod_imovel']?>">
            
          </div>
       </form>
       <a href="imovel.php" class="btn btn-info">Voltar para o inicio</a>
      </div>
    </div>
  </div>
    

    
 </body>
</html>