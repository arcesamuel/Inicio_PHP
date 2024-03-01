<?php
// Variable tipo String
$name = "Samuel";
$lastName = 'Medina'; 
$age = 22;
$size = 1.80;
$booleanTrue = true;
$booleanFalse = false;

// ARREGLOS
$array = [];
$array = array();
$arrayValues = [10, 'String', true, ['Otro Valor']];

// CONSTANTES
Const Constante_1 = 'Valor constante 1';
const Constante_2 = 23;

// OBJETOS 
$object = new stdClass();

// CLASES Y FUNCIONES
class Auto{
    /*var $color; // uso de "Var" para asignar nombre a la variable
    String $marca;
    array $array;
    bool $PropiedadBoolean = false;
    $PropiedadSinTipodeDato;*/

    int $numberOfDoors = null; 

    /*public function__constructor(int $doors){
        //this.numberOfDoors = $doors; Equivalente a JV
        $this->numberOfDoors = $doors; //En PHP
    }*/

    public function__constructor(
        public int $numberOfDoors)
        {    
    }

    public function__getDetails(string $time){
        //System.out.println(); Equivalente a JV
        echo "Time $time"
        echo "Time: " . $time;
        echo "Hello World";

    }
}

// INSTANCIA DE CLASES
$autoInstance = new Auto(4);
$autoInstance2 = Auto(4);

// CICLOS 
for($i=0; $i<10; $i++){
    echo $i ."\n";
}






?>