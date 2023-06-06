<?php

    include('conexao.php');
    $id = $_POST['id_usuario'];
    $nome = $_POST['nome_usuario'];
    $email = $_POST['email_usuario'];
    $fone = $_POST['fone_usuario'];
    $senha = $_POST['senha'];

    echo "<h1>Alterção de dados </h1>";
    echo "<p> Usuário: $nome </p>";

    $sql = "UPDATE usuario SET 
        nome_ usuario = '$nome',
        email_usuario = '$email',
        fone_usuario = '$fone', 
        senha = '$senha'

        WHERE id_usuario = $id_usuario";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso! <br>";

    else 
        echo "Erro ao alterar dados: ".$mysqli_erro($con)."!";

?>
<a href="index.php">Voltar</a>