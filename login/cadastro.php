<?php
require_once 'Confirmlogin.php';
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>
        Cadastro
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{
            font: 18px sans-serif;
            display: grid;
            height: 50vh;
            place-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>
            Cadastrar
        </h2>

        <form action="Salvar.php" method="post">
            <div class="form-group">
                <label for="nome">
                    Nome
                </label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cpf">
                    CPF
                </label>
                <input type="text" name="cpf" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</body>
</html>