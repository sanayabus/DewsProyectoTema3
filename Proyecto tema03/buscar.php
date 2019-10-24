<?php

  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $cabecera = array_keys($tabla[0]);

  $buscar = $_GET['buscar'];

  $tabla= filtrar($tabla, $buscar);
  require_once("template/articulos.php");
?>