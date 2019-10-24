<form method="POST" action="mostrar.php?indice=<?= $key ?>">
                <legend>Formulario Mostrar Artículo</legend>

                <div class="form-group">
                    <label for="">Descripción:</label>
                    <input type="text" name="Descripcion" disabled value="<?=$descripcion?>" class="form-control" required="required" title="Nombre">
                </div>

                <div class="form-group">
                    <label for="">Modelo:</label>
                    <input type="text" name="Modelo" disabled value="<?=$modelo?>" class="form-control" required="required" title="Nombre">
                </div>

                <div class="form-group">
                    <label for="">Categoria:</label>
                    <input type="text" name="Categoria" disabled value="<?=$categoria?>" class="form-control" required="required" title="Nombre">
                </div>

                <div class="form-group">
                    <label for="">Unidades:</label>
                    <input type="text" name="Unidades" disabled value="<?=$unidades?>" class="form-control" required="required" title="Nombre">
                </div>

                <div class="form-group">
                    <label for="">Precio:</label>
                    <input type="number" step="any" disabled value="<?=$precio?>" name="Precio" class="form-control" required="required" title="Nombre">
                </div>

                <a class="btn btn-primary" href="index.php" role="button" style="background-color:green">Volver<a>
            </form>