<h1>Editar registro.</h1>
<?php 
if(!empty($data['mensagem'])):
    echo "<script>";
    foreach($data['mensagem'] as $m):
        echo $m;
    endforeach;
    echo "</script>";
endif;
?>

<form action="/notes/editar/<?php echo $data['registros']['id']; ?>" method="post" enctype="multipart/form-data">


<input type="text" name="titulo" value="<?php echo $data['registros']['titulo']; ?>" placeholder="Titulo"/><br/>
<textarea name="texto" id="" cols="30" rows="10" placeholder="Texto"><?php echo $data['registros']['texto']; ?></textarea><br>

<?php if(!empty($data['registros']['imagem'])): ?>
    <button name="deletarImagem" class="btn orange">Deletar Imagem</button>
    <input type="submit" value="Atualizar" name="atualizar" class="btn">
<?php else: ?>
<input type="file" name="foo" id="" required><br>
<input type="submit" value="Atualizar" name="atualizarImagem" class="btn">
<?php endif; ?>



</form>