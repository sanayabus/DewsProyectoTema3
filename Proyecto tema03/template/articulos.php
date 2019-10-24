<!doctype html>
<html lang="es">

  <?php require_once("template/partials/head.php"); ?>
  <body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <div class="container">
      <?php require_once("template/partials/cabecera.php"); ?>
      <?php require_once("template/menu.php"); ?>
        <!-- Especificar main menu -->
      <section>
        <article>
              <!-- Especificar contenido -->
          <table class="table table-striped">
            <tr>
              <?php foreach ($cabecera as $atributo):?>
                <th>
                  <!--Añado Propiedades columna de los Objetos [ID,TITULO,AUTOR..ETC] las columnas-->
                  <?=$atributo;?>
                </th>
              <?php endforeach;?>
              <th>Acciones</th>

        <!--AÑADO COLUMNA DE ACCIONES-->

              <?php foreach ($tabla as $key => $libro):?>
                <tr>
                  <?php foreach($libro as $valor):?>
                    <td><?=$valor;?></td>
                  <?php endforeach;?>
                <td>
                  <a href="eliminar.php?indice=<?= $key?>" title="Eliminar"><i class="material-icons" style="color:green ">delete</i></a>
                  <a href="form_editar.php?indice=<?= $key?>" title="Actualizar"><i class="material-icons" style="color:green ">edit</i></a>
                  <a href="mostrar.php?indice=<?= $key?>" title="Mostrar"><i class="material-icons" style="color:green ">description</i></a>
                </td>
              </tr>
            <?php endforeach;?>
          </table>
          <h4 align="center">El número total de artículos es <?=count($tabla);?>.</h4>
        </article>
      </section>
      <?php require_once("template/partials/footer.php"); ?>
    </div>
    <?php require_once("template/partials/javascript.php"); ?>
  </body>
</html>