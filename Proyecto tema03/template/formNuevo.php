<?php
require_once("lib/funcionesTabla.php");
$tabCategoria = generarCategoria();
?>

<form method="POST" action="nuevo.php">
    <legend>Formulario Añadir Artículo</legend>

    <div class="form-group">
        <label for="">Descripción:</label>
        <input type="text" name="Descripcion" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Modelo:</label>
        <input type="text" name="Modelo" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Categoria:</label>
        <br>
        <select name="Categoria">
            <?php foreach($tabCategoria as $valor):?>
                <?php if($valor == $categoria): ?>
                    <option value="Categoria"><?=$valor?></option>
                    <?php else: ?><option><?=$valor?></option>
                <?php endif; ?>
            <?php endforeach;?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Unidades:</label>
        <input type="text" name="Unidades" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Precio:</label>
        <input type="number" step="any" name="Precio" class="form-control" required="required" title="Nombre">
    </div>

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar<a>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <button type="submit" class="btn btn-primary" style="background-color:green">Añadir</button>
</form>