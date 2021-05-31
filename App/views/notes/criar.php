<h1>Criar novo registro.</h1>
<?php 
if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;
?>

<form action="/notes/criar" method="post">

<input type="text" name="titulo" placeholder="Titulo"/><br/>
<textarea name="texto" id="" cols="30" rows="10" placeholder="Texto"></textarea><br>

<input type="submit" value="Gravar" name="cadastrar">
</form>