<?php

  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $cabecera = array_keys($tabla[0]);

  $criterio = $_GET['criterio'];

  $tabla= ordenar($tabla, $criterio);
  require_once("template/articulos.php");
  ?>