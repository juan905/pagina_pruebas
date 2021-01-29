<?php

function productos_json( &$boletos, &$camisas = 0, &$etiquetas = 0){

    //echo "Hola desde la funcion JSON";

    //1ER PASO creo una variable para reemplazar los valores del arreglo 0, 1 y 2 por cadenas de texto
    $dias = array(0 => 'un_dia', 1 => "pase_completo", 2 => "dos_2dias");
     

    //2DO PASO creo una variable para guardar la combinacion y se le agrega array_combine con los dias que he creado y boletos que quiero

    $total_boletos = array_combine($dias, $boletos);
       
       /*echo "<pre>";
        var_dump($total_boletos);
       echo "</pre>";*/
     

     //3R PASO es crear el JSON
     
     $json = array();

     foreach ($total_boletos as $key => $boletos) {
         if ((int)$boletos > 0) {
             $json[$key] = (int) $boletos;
         }
     }

     $camisas = (int) $camisas;
     if ($camisas > 0) {
         $json['camisas'] = $camisas;
     }

     $etiquetas = (int) $etiquetas;
     if ($etiquetas > 0) {
         $json['etiquetas'] = $etiquetas;
     }

     return json_encode($json);
}



function eventos_json(&$eventos){
//Para usar un JSON ENCODE debe utilizar un arreglo
$eventos_json = array();
foreach ($eventos as $evento) {
    $eventos_json['eventos'][] = $evento; //La llave de eventos se opcional
}
return json_encode($eventos_json);
}




function clean($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = strtolower($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
  
  }