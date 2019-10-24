<?php
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $key = $_GET['indice'];
    $tabla = eliminar($tabla, $key);
    require_once("template/articulos.php");
?>