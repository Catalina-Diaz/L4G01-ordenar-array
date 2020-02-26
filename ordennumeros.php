<h3>Orden de Numeros</h3>     
<!--Texto plano-->

<?php //inico php-------------
    $numeros = [4,6,9,8,3,2,1,7,5];

    echo "Hay ".count($numeros)." numeros"."<br>";
    echo "Arreglo Original: "."<br>";
    var_dump ($numeros);                       //para saber el contenido de un arreglo
    
    sort($numeros);                            //para ordenar

    echo "<br>"."<br>"."Arreglo ordenado: ";
    for($i=0; $i < count($numeros); $i++){
        echo $numeros[$i].", ";             
    }

?>