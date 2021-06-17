<?php 
if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;

foreach ($data['registros'] as $note): ?>

<h3><a href="/notes/ver/<?php echo $note['id']; ?>"> <?php echo $note['titulo']; ?></a></h3>
<?php if(isset($_SESSION['logado'])): ?>
<a href="/notes/editar/<?php echo $note['id']; ?>">Editar</a> | <a href="/notes/excluir/<?php echo $note['id']; ?>">Excluír</a>
<?php endif; ?>
<?php endforeach; ?>