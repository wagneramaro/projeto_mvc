<?php foreach ($data as $note): ?>
<h1><?php echo $note['titulo']; ?></h1>
<p><?php echo nl2br($note['texto']); ?></p>
<?php endforeach; ?>