<?php
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $tabCategoria = generarCategoria();
    $cabecera = array_keys($tabla[0]);

    $idArticulo = ultimoId($tabla) + 1;
    $descripcion = $_POST['Descripcion'];
    $modelo = $_POST['Modelo'];
    $categoria = $_POST['Categoria'];
    $unidades = $_POST['Unidades'];
    $precio = (float) $_POST['Precio'];

    $registro =
        [
            "Id" => $idArticulo,
            "Descripcion" => $descripcion,
            "Modelo" => $modelo,
            "Categoria" => $categoria,
            "Unidades" => $unidades,
            "Precio" => $precio
        ];
    $tabla[]= $registro;
    require_once("template/articulos.php");
?>