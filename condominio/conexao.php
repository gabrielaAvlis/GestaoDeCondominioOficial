<?php
$databaseHost = 'localhost';
$databaseName = 'condominio';
$databaseUsername = 'root';
$databasePassword = '';

if($conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)){
    //echo "Conectado!";
}else
echo"Erro!";


function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
            $texto
          </div>";
    }

    

?>