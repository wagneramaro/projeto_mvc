<?php 
if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;
?>
<h1>Fazer login</h1>

<form action="/home/login" method="POST">
E-mail: <input type="text" name="email" id=""><br>
Senha: <input type="password" name="senha"><br>
<button name="entrar" class="btn">Entrar</button>
</form>
