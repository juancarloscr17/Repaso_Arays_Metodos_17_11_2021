<?php
    header("Content-Type: application/json");
    $_DATA = file_get_contents("php://input");
    if($_DATA){
        $_DATA = json_decode($_DATA, true);
        extract($_DATA);
    }else{
        $nombre = (string) "";
    }
    
 
    for ($i=0; $i <20 ; $i++) { 
        $array5[]=random_int(1,20);
    }
    print_r($array5);
    $duplicado = (array)array_slice($array5,10);
    
    print_r($duplicado);
    
    
    
    
    // $array4 = (array)[];
    // array_push( 
    //     $array4,
    //     "Juan","Carlos","Coronel","Rodriguez"
    // );
    // print_r($array4);

    // $resp4 = array_shift($array4);
    //  print_r($resp4);
     








    //    $i = (int) 1;
    // $config = (object) [];
    // $config->flags = EXTR_PREFIX_ALL;
    // $config->prefix = "array3_Eliminados";
    // $array3 = (array)[
    //     0=> "Juan",
    //     1=> "Carlos",
    //     2=> "Coronel"
    // ];
    
    // // $listaEliminados = function() use(&$array3, &$i):array{
    // //     $Eliminados = (array) [
    // //         $i => array_pop(array: $array3)
    // //     ];
    // //     $i++;
    // //     return $Eliminados;
    // // };
    // // extract($listaEliminados(), $config->flags, $config->prefix );
    // // extract($listaEliminados(), $config->flags, $config->prefix );

    // // print_r($array3_Eliminados_1);
    // // print_r($array3_Eliminados_2);
   


    





    // $array2 = (array) [];
    // $unshift = function(mixed $data) use(&$array2):void{
    //     (int) array_unshift(
    //         $array2,
    //         $data
    //     );
    // };

    // $unshift("Juan"); 
    // $unshift("Coronel");
    // $unshift("Carlos");

    // print_r($array2);
    // print_r(count($array2));


    //  $array= (array)[];
    //  $resp= (int) array_push()



    //Array Enumerados
    // $lista = (array) [];
    // $lista[0] = "Hola";
    // $lista[1] = 23;

    
    //Arrays Asociativos
    // $lista2 = (array) [
    //     "NOMBRE" => (string) "aaaa"
    // ];


    //Lista de Objetos
    // $obj = (object) [];
    // $obj->NOMBRE = (string) "aaaa";
    

    //Convertir un array 'Enumero o Asociativos' en objetos
    // settype($lista, "object");
    
?>