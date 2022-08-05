<?php
// Faz conexão com o banco de dados.

/*
$dbHost='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='formularioCL';
*/

$conexao=new mysqli($dbHost='localhost', $dbUsername='root',$dbPassword='', $dbName='formularioCL');
// mysqli > Representa uma conexão entre PHP e um banco de dados MySQL.
// conexão realizada com sucesso.
// segue abaixo comandos para realizar teste de conexão/falha.

/*
if($conexao->connect_errno){
   echo "Erro";
}
else{
    echo "Conexão efetuada com sucesso";
}
*/
?>
