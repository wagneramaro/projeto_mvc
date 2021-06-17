<h1>Cadastrar Usuário</h1>
<?php

if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;

?>

<form action="/users/cadastrar" method="POST">

Nome: <input type="text" name="nome">
E-mail: <input type="email" name="email" id="">
Senha: <input type="password" name="senha">
<input type="submit" name="cadastrar" value="Cadastrar" class="btn">

</form>