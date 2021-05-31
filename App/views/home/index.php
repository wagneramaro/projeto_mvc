<?php foreach ($data as $note): ?>
<h3><a href="/notes/ver/<?php echo $note['id']; ?>"> <?php echo $note['titulo']; ?></a></h3>

<?php endforeach; ?>