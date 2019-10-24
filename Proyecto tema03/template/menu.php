<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Artículos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_nuevo.php">Nuevo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ordenar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ordenar.php?criterio=<?= 'Descripcion'?>">Descripción</a>
          <a class="dropdown-item" href="ordenar.php?criterio=<?= 'Modelo'?>">Modelo</a>
          <a class="dropdown-item" href="ordenar.php?criterio=<?= 'Categoria'?>">Categoria</a>
          <a class="dropdown-item" href="ordenar.php?criterio=<?= 'Unidades'?>">Unidades</a>
          <a class="dropdown-item" href="ordenar.php?criterio=<?= 'Precio'?>">Precio</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"> 
      <input class="form-control mr-sm-2" name="buscar" type="search" placeholder="Buscar..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" formaction="buscar.php" type="submit">Buscar</button>
    </form>
  </div>
</nav>