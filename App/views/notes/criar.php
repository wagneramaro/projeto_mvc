<h1>Criar novo registro.</h1>
<?php 
if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;
?>

<form action="/notes/criar" method="post" enctype="multipart/form-data" >

<input type="text" name="titulo" placeholder="Titulo" required/><br/>
<textarea name="texto" id="" cols="30" rows="10" required placeholder="Texto"></textarea><br>
<input type="file" name="foo" value="" required /><br>

<input type="submit" value="Gravar" name="cadastrar" class="btn">
</form>