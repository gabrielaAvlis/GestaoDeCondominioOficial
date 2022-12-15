<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imoveis</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>

  <!--Container, tamanho do layout padrão-->
  <div class="container"></div>
  
     <!--Menu-->
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#"> Imovel</a>
      <div class="position-relative">
        <div class="position-absolute top-0 start-0"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
        <a class="nav-link active fw-bold" aria-current="page" href="cadastroDeImovel.php">Cadastro de Imovel</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active fw-bold" aria-current="page" href="index.php">Pagina Inicial</a>
      </li>
    </ul>

      </form>
    </div>
  </nav>

  <?php
    
    $pesquisarImovel = $_POST['busca'] ?? '';
    
    include "conexao.php";

    $sql = "SELECT * FROM imoveis WHERE endereco LIKE '%$pesquisarImovel%' ";

    $dados = mysqli_query($conn, $sql);


?>


   <!--Container, tamanho do layout padrão-->
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="imovel.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </nav>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">endereco</th>
                    <th scope="col">complemento</th>
                    <th scope="col">cidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">CEP</th>
                    <th scope="col">email</th>
                    <th scope="col">contato</th>
                    <th scope="col">Funções</th>
            
                </tr>
            </thead>
            <tbody>
            <?php
              while ($linha = mysqli_fetch_assoc($dados)) {
              $cod_imovel = $linha['cod_pessoa'];
              $endereco = $linha['endereco'];
              $comlemento = $linha['complemento'];
              $cidade = $linha['cidade'];
              $UF = $linha['UF'];
              $CEP = $linha['CEP'];
              $email = $linha['email'];
              $contato = $linha['contato'];
      
              echo "<tr>
                       <th scope='row'>$endereco</th>
                       <td>$comlemento</td>
                       <td>$cidade</td>
                       <td>$UF</td>
                       <td>$CEP</td>
                       <td>$email</td>
                       <td>$contato</td>
                       <td width=150px>
                           <a href='editImovel.php?id=$cod_imovel' class='btn btn-info btn-sm'>Editar</a>
                           <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#comfirma' onclick=" .'"' ."pegar_dados('$endereco')" .'"' .">Excluir</a>
                       </td>
              </tr>";
            }
            ?>
            </tbody>        
        </table>
          
        <a href="index.php" class="btn btn-info">Voltar</a>

      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="excluirImovel.php" method="POST">
        <p> Deseja realmente excluir? <b id="imovel">endereço Imovel</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="id" id="imovel1" value="">
        <input type="hidden" name="id" id="cod_pessoa" value="">
        <button type="button" class="btn btn-danger">Sim</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  function pegar_dados(id, nome) {
    document.getElementById('imovel').innerHTML = nome;
    document.getElementById('imovel1').innerHTML = nome;
    document.getElementById('cod_imovel').value = id;
    
  }
    
      
</body>
</html>
    
