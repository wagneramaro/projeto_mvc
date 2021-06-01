<?php 
if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;

foreach ($data['registros'] as $note): ?>
<h3><a href="/notes/ver/<?php echo $note['id']; ?>"> <?php echo $note['titulo']; ?></a></h3>
<a href="/notes/excluir/<?php echo $note['id']; ?>">Excluír</a>

<?php endforeach; ?>