<?php foreach ($data as $note): ?>
<h1><a href="/notes/ver/<?php echo $note['id']; ?>"> <?php echo $note['titulo']; ?></a></h1>
<p><?php echo nl2br($note['texto']); ?></p>
<?php endforeach; ?>