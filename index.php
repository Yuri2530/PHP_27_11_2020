<?php

/*$nombre = "Yuri";
$apellido = "Sanguino Rodriguez";
$edad = 30;
$casa = true;
echo "$apellido<br>";*/

//Definir variables de tipo constantes, no cambian
/*define('nombre', 'Yuri Sanguino Rodriguez');
define('nombre2', 'Victoria Chaparro');
echo nombre2;*/


/*$numero = 10;
$numero++;
echo $numero;*/

/*$a=false;
while ($a <= 10) {
    echo "$a<br>";
    $a++;
}

do{
    var_dump($a)."<br>";
}while($a);*/

/*$lista = array("Yuri", "Sanguino");

$lista2 = array(
    "nombre" => "Yuri", 
    "nombre2"=>"Sanguino",
    "lista" => array(
        "CAJA DE COMPENSACIÓN" => "comfenalco",
        "Diplomado" => array("PHP")
    )
);

$resul = array_splice($lista2,1);
//$resul = array_splice($lista2,1,true);
var_dump($resul);*/

/*$matriz = array(
                array ("Yuri", "Miguel","h","h"),
                array("Richard", "Adrian","h","h"),
                array("a", "b","h","h"),
                array("c", "d","h","h")
);
//var_dump($matriz[1][1]);

$matriz_asociativo = array(
                "Terrestres" => array(
                    "Elefante",
                    "Perro",
                    "gato"
                ),
                "Aves" =>array(
                    "Pajaro",
                    "Pato",
                    "Aguila",
                    "Cóndor"
                ),
                "Acuaticos" =>array(
                    0=>  "Delfin",
                    1=>  "Tiburón",
                    2=> "Ballena",
                    3=> "Estrella de mar"
                ),

);
var_dump($matriz_asociativo["Acuaticos"][2]);*/


//funciones
/*function saludar($p2,$p1="usuario"){
    return "Hola : ".$p1." ".$p2;
}
echo(saludar("Cómo estás", "Yuri"));*/


function operaciones_matematicas ($num1,$num2,$opcion){

    switch ($opcion) {
        case 'suma':
            return($num1+$num2);
            break;
            case 'resta':
                return($num1-$num2);
                break;
        default:
            # code...
            break;
    }
}
echo(operaciones_matematicas(5,5,"suma"));

?>