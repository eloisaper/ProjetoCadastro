<?php
    include("conexao.php");
    //para copiar todo o código do arq indicado e colar aqui;

    //upload foto
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name']){
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        $nome_foto = $pasta_destino.date("Ymd-His").$estensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    // fim upload

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "Nome: $nome";
    echo "Email: $email";
    echo "Fone: $fone";
    echo "Senha: $senha";

    $sql = "insert into usuario (nome_usuario, email_usuario, fone_usuario, senha, foto)";
    $sql .= "values ('".$nome."','".$email."','".$fone."','".$senha."','".$nome_foto."')";
    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados cadastrados com sucesso";
    else
        echo "erro ao tenatar cadastrar";
?>