<?php
    include("conexao.php");
    //para copiar todo o código do arq indicado e colar aqui;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "Nome: $nome";
    echo "Email: $email";
    echo "Fone: $fone";
    echo "Senha: $senha";

    $sql = "insert into usuario (nome_usuario, email_usuario, fone_usuario, senha)";
    $sql .= "values ('".$nome."','".$email."','".$fone."','".$senha."')";
    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados cadastrados com sucesso";
    else
        echo "erro ao tenatar cadastrar";
?>