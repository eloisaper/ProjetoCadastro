<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario where id=$id";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ". mysqli_error($con)."!";
?>