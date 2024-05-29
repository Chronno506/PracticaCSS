<?php

class Gasto{
public $descripcion;
public $monto;

public function __constructor($descripcion,$monto){
$gasto1 = new Gasto($descripcion,$monto);

};
public function getDescripcion(){
return $descripcion;
};
getMonto(){
return $monto;
};
}



class RegistroGastos{
public function __constructLista() {
    $listaGastos = []; 
}

public function agregarGasto($descripcion,$monto){
foreach ($listaGastos as $gasto1) {
    __constructor($descripcion,$monto);
    echo $listaGastos[];
}
}//fin del agregar

public function obtenerGastos(){
    foreach ($listaGastos as $gasto1) {
        echo $gasto1->monto . "<br>";

    }
}

public function obtenerTotalGasto(){
    foreach ($listaGastos as $gasto1) {
    $sumaGasto = $sumaGasto+ $listaGastos[($gasto1($monto))];
    echo $sumaGasto; 
}
}


}
?>