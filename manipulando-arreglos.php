<?php

$arreglo_frutas = [
    "Manzana" => "rojo",
    "Pera" => "verde",
    "Platano" => "amarillo",
    "KIWI" => "verde claro",
    "MELON" => "amarillo claro",
    "Frutilla" => "rojo",
    "Uva" => "vino",
];

// Cambia a mayúsculas o minúsculas todas las claves en un array
/*     Parámetros
* array: Array para trabajar en
* case : Entre CASE_UPPER o CASE_LOWER (por defecto)
*/
print_r(array_change_key_case($arreglo_frutas, CASE_UPPER));
print_r(array_change_key_case($arreglo_frutas, CASE_LOWER));

// Divide un array en fragmentos
/**
 * Parámetros 
 * array : Array para trabajar en
 * size:  El tamaño de cada fragmento. 
 * preserve_keys: Cuando se establece en true las keys serán preservadas. El valor por defecto es false lo cual reindexará los fragmentos numéricamente. 
 * */
print_r(array_chunk($arreglo_frutas, 2));
print_r(array_chunk($arreglo_frutas, 2, true));

// Llena un array con valores, especificando las keys
/**                 Claves de relleno de matriz*/
/**
* Parámetros 
* keys: Array con los valores que serán usados como keys. Valores ilegales para una clave serán convertidos a string.
* value: Valor usado para el llenado.*/
$llenado_valores = array_fill_keys($arreglo_frutas, '<-- miel');
print_r($llenado_valores);

// Llena un array con valores
/**
* Parámetros 
* start_index: El primer índice del array retornado.
* Si start_index es negativo, el primer índice del array retornado será start_index y los siguientes indices comenzarán desde cero (ver ejemplo).
* num: Número de elementos a insertar. Debe ser mayor o igual que cero.
* value: Valor a usar para el llenado.
*/

$arreglo_ropa = array_fill(2, 8, 'canguro');
$arreglo_color = array_fill(-6, 4, 'rojo');

print_r($arreglo_ropa);
print_r($arreglo_color);

// Verifica si el índice o clave dada existe en el array
/**
 *  Parámetros
 * key: Valor para verificar.
 * array: Un array con las claves para verificar
 */
if (array_key_exists('Frutilla', $arreglo_frutas)) {
    echo "The 'Frutilla' element is in the array";
}

//  Combina dos o más arrays
/**
 * Parámetros 
 * array1: Array inicial a combinar.
 * ... : Lista variable de arrays para combinar.
 */
$array_uno_varios = [
    "color" => "red", 
    2, 
    4,
    "fruta" => "frutilla",
    "nombre" => "dani",
];

$array_dos_varios = [
    "a", 
    "b", 
    "color" => "green", 
    "colores" => "negro",
    "shape" => "trapezoid", 
    4,
    "nombre" => "rosanela",
    "fruta" => "pera",
];
$resultado = array_merge($array_uno_varios, $array_dos_varios);

print_r($resultado);


//  Une dos o más arrays recursivamente

$array_varios_1 = [
    "color" => "red", 
    "color" => "morado",
    2, 
    4,
    "fruta" => "frutilla",
    "nombre" => "dani",
    "nombre" => "avril",
];

$array_varios_2 = [
    "a", 
    "b", 
    "color" => "green", 
    "colores" => "negro",
    "shape" => "trapezoid", 
    4,
    "nombre" => "rosanela",
    "fruta" => "pera",
    "color" => "rojo",
    "fruta" => "kiwi",
    "color" => "amarillo",
    "fruta" => "melon",
    "color" => "verde",
    "nombre" => "lesly"
];

$respuesta_arreglo_recursivo = array_merge_recursive($array_varios_1, $array_varios_2);
print_r($respuesta_arreglo_recursivo);


// Ordena varios arrays, o arrays multidimensionales
$array_numerico_uno = [10, 100, 100, 0];
$array_numerico_dos = [1, 3, 2, 4];

array_multisort($array_numerico_uno, $array_numerico_dos);

print_r($array_numerico_uno);
print_r($array_numerico_dos);


/**
 * Banderas de tipo de ordenación:
 * 
 * SORT_NUMERIC - compara los elementos numéricamente
 * SORT_STRING - compara los elementos como strings
 * 
 */

$arreglo_multidimencional = [
                                ["10", 11, 101, 100, "b", "a"],
                                [   4,  5, "2",   3,   1,  0]
                            ];
array_multisort($arreglo_multidimencional[0], SORT_ASC, SORT_STRING,
                $arreglo_multidimencional[1], SORT_NUMERIC, SORT_DESC);
print_r($arreglo_multidimencional);

// Rellena un array a la longitud especificada con un valor
/**
 * Parámetros 
 * array: Array inicial de valores a rellenar.
 * size: Nuevo tamaño del array.
 * value: Valor a rellenar si array es menor que size.
 */
$arreglo_numeros_positivos = [1, 2, 3];


$respuesta_uno = array_pad($arreglo_numeros_positivos, 6, 66);
print_r($respuesta_uno);

$respuesta_dos = array_pad($arreglo_numeros_positivos, -7, -1);
print_r($respuesta_dos);

$respuesta_tres = array_pad($arreglo_numeros_positivos, 5, "noop");
print_r($respuesta_tres);

$respuesta_cuatro = array_pad($arreglo_numeros_positivos, 2, "hola");
print_r($respuesta_cuatro);
// sin relleno

//  Extrae el último elemento del final del array
$arreglo_nombres = ["Dani", "Avril", "Carla", "Margot"];

$elemento_eliminado_arreglo = array_pop($arreglo_nombres);

print_r("Elemento eliminado del arreglo: $elemento_eliminado_arreglo");
echo("\n");

//  Inserta uno o más elementos al final de un array
$arreglo_dias = ["Lunes", "Martes", "Miercoles"];
$antiguo_arreglo_dias = $arreglo_dias;

array_push($arreglo_dias, "Jueves", "Viernes");

print_r($arreglo_dias);
print_r($antiguo_arreglo_dias);
echo("\n");

// Quita un elemento del principio del array
$array_meses = ["enero", "febrero", "marzo", "abril"];

$mes_eliminado = array_shift($array_meses);
print_r("Mes eliminado: $mes_eliminado");
echo("\n");
print_r($array_meses);

// Identificar si es arreglo

$arreglo = [1, 2, 3, 4, 5];
$no_es_arreglo = "Hola";

if (is_array($no_es_arreglo)) {
    echo "Es un arreglo";
} else {
    echo "No es un arreglo";
}
echo("\n");

// Convertir un estring a un arreglo

$cadena = "Hola, mi nombre es alexander, estudiante, carismatico, emprendedor";
$arreglo_cadena = explode(",", $cadena);

print_r($cadena);
echo("\n");
print_r($arreglo_cadena);
echo("\n");

// convertir un arreglo en un estring

$arreglo_abecedario = ["a", "b", "c", "d", "e"];
$cadena = implode("-", $arreglo_abecedario);

print_r($arreglo_abecedario);
var_dump($cadena);
echo("\n");
?>