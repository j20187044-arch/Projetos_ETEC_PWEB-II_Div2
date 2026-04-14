<?php
require'./controle/conexao.php';
$pdo = conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from categorias;";
$prp = $pdo->prepare($sql);
$prp->execute();
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">LogoDaLojinha</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Inicial</a>
            </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
          <?php while($data = $prp->fetch(PDO::FETCH_ASSOC)){ ?>
            <li><a class="dropdown-item"
            href="listarprodutos.php?op=cate<?php echo $data['catid'];?>">
              <?php echo $data ['catnome']; ?>
           </a></li>
            <?php } ?>

            </ul>

        </li>
            <li class="nav-item">
              <a class="nav-link" href="subcategorias.html">Subcategorias</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>