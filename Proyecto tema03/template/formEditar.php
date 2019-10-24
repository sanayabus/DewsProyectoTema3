<?php
require_once("lib/funcionesTabla.php");
$tabCategoria = generarCategoria();
?>

<form method="POST" action="editar.php?indice=<?= $key ?>">
    <legend>Formulario Editar Artículo</legend>

    <div class="form-group">
        <label for="">Descripción:</label>
        <input type="text" name="Descripcion" value="<?=$descripcion?>" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Modelo:</label>
        <input type="text" name="Modelo" value="<?=$modelo?>" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Categoria:</label>
        <br>
        <select name="Categoria">
            <?php foreach($tabCategoria as $valor):?>
                <?php if($valor == $categoria): ?>
                    <option selected="selected" value="Categoria"><?=$valor?></option>
                    <?php else: ?><option><?=$valor?></option>
                <?php endif; ?>
            <?php endforeach;?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Unidades:</label>
        <input type="text" name="Unidades" value="<?=$unidades?>" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Precio:</label>
        <input type="number" step="any" value="<?=$precio?>" name="Precio" class="form-control" required="required" title="Nombre">
    </div>

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar<a>
    <button type="submit" class="btn btn-primary" style="background-color:green">Modificar</button>
</form>