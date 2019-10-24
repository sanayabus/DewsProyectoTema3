<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $tabCategoria = generarCategoria();
    $cabecera = array_keys($tabla[0]);
    $key = $_GET['indice'];
    $registro= $tabla[$key];
    
    $id=$tabla[$key]['Id'];
    $descripcion = $registro['Descripcion'];
    $modelo = $registro['Modelo'];
    $categoria = $registro['Categoria'];
    $unidades = $registro['Unidades'];
    $precio = (float) $registro['Precio'];
?>

<!doctype html>
<html lang="es">

  <?php require_once("template/partials/head.php"); ?>

  <body>
    <div class="container">
        <?php require_once("template/partials/cabecera.php"); ?>
        <!-- Especificar main menu -->
        <section>
            <article>
                <?php require_once("template/formMostrar.php"); ?>
            </article>
        </section>
        <?php require_once("template/partials/footer.php"); ?>
    </div>
        <?php require_once("template/partials/javascript.php"); ?>
  </body>
</html>