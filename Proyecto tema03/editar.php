<?php

  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $tabCategoria = generarCategoria();
  $cabecera = array_keys($tabla[0]);

  $key = $_GET['indice'];
  $idLibro = $tabla[$key]['Id'];

  $descripcion = $_POST['Descripcion'];
  $modelo = $_POST['Modelo'];
  $categoria = $_POST['Categoria'];
  $unidades = $_POST['Unidades'];
  $precio = (float) $_POST['Precio'];

  $registro = 
  [
      "id" => $idLibro,
      "Descripcion" => $descripcion,
      "Modelo" => $modelo,
      "Categoria" => $categoria,
      "Unidades" => $unidades,
      "Precio" => $precio
  ];

  $tabla= actualizar($tabla, $registro, $key);
  require_once("template/articulos.php");
?>