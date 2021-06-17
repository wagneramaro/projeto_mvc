<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruso MVC</title>
</head>
<body>
<h2>Bloco de anotações</h2>
<a href="/">Home</a> | 
<?php if(isset($_SESSION['logado'])): ?>
<a href="/notes/criar">Criar novo Registro</a> | 
<a href="/users/cadastrar">Cadastrar Usuário</a>
<?php endif; ?>
<?php if(!isset($_SESSION['logado'])): ?>
    <a href="/home/login">Login</a>
<?php else: ?>
    Olá <?php echo $_SESSION['userNome']; ?>
    <a href="/home/logout">Sair</a>
<?php endif; ?>
    <?php require_once '../App/views/'.$view.'.php'; ?>
</body>
</html>