<nav>
    <div class="nav-wrapper">
      <form action="/home/buscar" method="POST">
        <div class="input-field">
          <input id="search" type="search" name="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
<?php 

if(!empty($data['mensagem'])):
    foreach($data['mensagem'] as $m):
        echo $m.'<br/>';
    endforeach;
endif;

//Paginação
$paginacao = new \App\Pagination($data['registros'], isset($_GET['page']) ? $_GET['page'] : 1, 5);

if(empty($paginacao->resultado())):
    echo "Nenhum registro encontrado!";
endif;

foreach ($paginacao->resultado() as $note): ?>
<img src="<?php echo URL_BASE; ?>/upload/<?php echo $note['imagem']; ?>" alt="imagem" />
<h3><a href="/notes/ver/<?php echo $note['id']; ?>"> <?php echo $note['titulo']; ?></a></h3>
<?php if(isset($_SESSION['logado'])): ?>
<a href="/notes/editar/<?php echo $note['id']; ?>" class="btn orange">Editar</a> <a href="/notes/excluir/<?php echo $note['id']; ?>" class="btn red">Excluír</a>
<?php endif; ?>
<?php endforeach; ?>
<?php $paginacao->navigator(); ?>