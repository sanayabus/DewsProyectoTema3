<?php

function generarTabla(){
    /* Fichero: FuncionesTabla.php
    Descripción: Colección de funciones para la gestión de una tabla
    Proyecto: Actividad 3.5
    Autor: Santiago Ayala Bustamante
    Fecha: 16/10/2019
    */

    /*Genera una matriz de libros índice primario escalar
    índice secundario asociativo
    Argumentos de entrada: null
    Salida: Tabla de Libros */

    $tabla = 
    [
        [
            "Id" => "1",
            "Descripcion" => "Intel Corei7-9750H/16GB/512GB SSD",
            "Modelo" => "MSI GF63 Thin 9SC-047XES",
            "Categoria" => "Portátil",
            "Unidades" => "20",
            "Precio" => "899€"
        ],
        [
            "Id" => "2",
            "Descripcion" => "Intel Core i5-7400/8GB/240GB SSD",
            "Modelo" => "PcCom Basic Office Pro",
            "Categoria" => "Sobremesa",
            "Unidades" => "17",
            "Precio" => "375€"
        ],
        [
            "Id" => "3",
            "Descripcion" => "SSD 480GB 3D NAND SATA3",
            "Modelo" => "Crucial BX500",
            "Categoria" => "Componente",
            "Unidades" => "8",
            "Precio" => "68€"
        ],
        [
            "Id" => "4",
            "Descripcion" => '24.5" LED FHD',
            "Modelo" => "BenQ GL2580H",
            "Categoria" => "Pantalla",
            "Unidades" => "28",
            "Precio" => "115€"
        ],
        [
            "Id" => "5",
            "Descripcion" => 'Impresora Láser Monocromo Wifi',
            "Modelo" => "HP LaserJet Pro M15w",
            "Categoria" => "Impresora",
            "Unidades" => "13",
            "Precio" => "69€"
        ],
    ];

    return $tabla;

}

function generarCategoria(){
    $tabCategoria = 
    [
        "Portatil" => "Portátil",
        "Sobremesa" => "PC sobremesa",
        "Componente" => "Componente",
        "Pantalla" => "Pantalla",
        "Impresora" => "Impresora",
    ];
    return $tabCategoria;
}

function eliminar($tabla, $key){

    /*Eliminar()
    Permite eliminar un elemento de la tabla
    Entrada:
        * tabla() - la tabla con los datos
        * key - índice del elemento de la tabla que se desea eliminar
    Devuelve:
        * tabla con el elemento eliminado
        */

        unset($tabla[$key]);
        # Reconstruye los índices primarios de la tabla
        $tabla = array_values ($tabla);
        return $tabla;
}

function actualizar($tabla,$registro,$key){
    $tabla[$key]=$registro;
    return $tabla;
}

function nuevo($tabla,$registro){
    $tabla[]=$registro;
    return $tabla;
}

function ordenar($tabla,$campo){
    foreach($tabla as $key => $registro){
        $aux[$key] = $registro[$campo];
    }
    array_multisort($aux, SORT_ASC, $tabla);
    return $tabla;
}

function filtrar($tabla,$expresion){
    $aux = array();
    foreach($tabla as $key => $registro){
        if(in_array($expresion,$registro)){
            $aux[]=$registro;
        }
    }
    return ($aux);
}

function ultimoId($tabla){
    $ultimo = end($tabla);
    return $ultimo["Id"];
}
?>