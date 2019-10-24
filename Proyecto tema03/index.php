<?php
      require_once("lib/funcionesTabla.php");
      $tabla = generarTabla();
      $cabecera = array_keys($tabla[0]);
      require_once("template/articulos.php");
?>