<div class="col s12">
    <div class="col s12 m4">
        <img class="responsive-img" src="<?php echo URL_BASE; ?>/upload/<?php echo $data['imagem']; ?>" alt="imagem" />
    </div>
    <div class="col s12 m8">
    <h2><?php echo $data['titulo']; ?></h2>
    <button onclick="window.location.href = '/'" class="btn">Voltar</button>
    <p><?php echo nl2br($data['texto']); ?></p>
    </div>
</div>




