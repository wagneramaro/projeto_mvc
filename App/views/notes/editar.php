<h1>Editar registro.</h1>
<?php 
if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;
?>

<form action="/notes/editar/<?php echo $data['registros']['id']; ?>" method="post">

<input type="text" name="titulo" value="<?php echo $data['registros']['titulo']; ?>" placeholder="Titulo"/><br/>
<textarea name="texto" id="" cols="30" rows="10" placeholder="Texto"><?php echo $data['registros']['texto']; ?></textarea><br>

<input type="submit" value="Atualizar" name="atualizar" class="btn">
</form>