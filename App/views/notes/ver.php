<img src="<?php echo URL_BASE; ?>/upload/<?php echo $data['imagem']; ?>" alt="imagem" />
<h2><?php echo $data['titulo']; ?></h2>
<br><button onclick="window.location.href = '/'" class="btn">Voltar</button>
<p><?php echo nl2br($data['texto']); ?></p>
