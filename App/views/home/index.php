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
<div class="col s12">
  <div class="col s12 m4">
    <img class="responsive-img" src="<?php echo URL_BASE; ?>/upload/<?php echo $note['imagem']; ?>" alt="imagem" />
  </div>
  <div class="col s12 m8">
  <h3 class="light"><a href="/notes/ver/<?php echo $note['id']; ?>"> <?php echo $note['titulo']; ?></a></h3>
  <p><?php echo $note['nome']; ?></p>
<?php if(isset($_SESSION['logado'])): ?>

<!-- Modal Structure -->
<div id="modal<?php echo $note['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Confirmação</h4>
      <p>Realmente deseja excluír esse post?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      <a href="/notes/excluir/<?php echo $note['id']; ?>" class="btn red">Excluír</a>
     
    </div>
  </div>



<a href="/notes/editar/<?php echo $note['id']; ?>" class="btn orange">Editar</a> 

<a class="waves-effect waves-light btn modal-trigger red" href="#modal<?php echo $note['id']; ?>">Excluir</a>


<?php endif; ?>
  </div>


</div>


<?php endforeach; ?>
<?php $paginacao->navigator(); ?>