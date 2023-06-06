<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM usuario WHERE id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 10%;
        }
        h1{
            text-align: center;
            font-family: monospace;
        }
        form{
            width: 500px;
            margin: 0 auto;
        }
        div{
            margin: 10px 0;
        }
        label{
            display: inline-block;
            width: 150px;
        }
        input{
            width: 300px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type=submit]{
            width: 100%;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background-color: #444;
        }
       
    </style>
</head>
<body>
    <h1>Cadastro de Usuarios - IFSP</h1>
    <form action="altera_usuario_exe.php" method="post">  
          <fieldset>

        <input name="id_usuario" type="hidden" value="<?php echo $row ['id']?>">

        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required
            value="<?php echo $row ['nome_usuario']?>">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required
            value="<?php echo $row ['email_usuario']?>">

        </div>
        <div>
            <label for="fone">Fone: </label>
<input type="tel" name="fone" id="fone" placeholder="Digite seu telefone"  pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
value="<?php echo $row ['fone_usuario']?>">

        </div>
          <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Password" required
            value="<?php echo $row ['senha']?>">

        </div>
    <input type="submit" value="Salvar">
</fieldset>

    </form>
    
</body>
</html>