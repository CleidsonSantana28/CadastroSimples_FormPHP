<?php
// Verificação dos dados e envio dos dados cadastrados ao banco
// botão submit do formCadastro
if(isset($_POST['submit']))
{

    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['email']);
    //print_r('<br>');
    //print_r($_POST['telefone']);

    include_once('config.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];

    $result=mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone)VALUES('$nome','$email','$telefone')");
}

// ao inserir as informações é salvo no banco, então mas se atualizar e pede para reeviar se confirmar esse reeviu estar duplicando a informação no banco.
// cadastro trava se inserir no campo telefone caracters maior do quer foi configurado no banco.
?>