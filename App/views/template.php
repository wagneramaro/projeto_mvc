<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Curso de PHP MVC</title>
</head>
<body>

<nav class="blue">
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo">Bloco de Anotações</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <?php if(isset($_SESSION['logado'])): ?>
        <li><a href="/notes/criar">Criar Nota</a></li>
        <li><a href="/users/cadastrar">Novo Usuário</a></li>
        <?php endif; ?>
        <?php if(!isset($_SESSION['logado'])): ?>
            <li><a href="/home/login">Login</a></li>
        <?php else: ?>
            <li>Olá <?php echo $_SESSION['userNome']; ?></li>
            <li><a href="/home/logout">Sair</a></li>
        <?php endif; ?>


        
      </ul>
    </div>
  </nav>
  



    <div class="row container">
    <?php require_once '../App/views/'.$view.'.php'; ?>
    </div>
    
</body>
</html>