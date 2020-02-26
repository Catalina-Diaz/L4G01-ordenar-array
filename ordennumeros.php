<h3>Orden de Numeros</h3>     
<!--Texto plano-->

<?php //inico php-------------
    $numeros = [4,6,9,8,3,2,1,7,5];

    echo "Hay ".count($numeros)." numeros"."<br>";
    echo "Arreglo Original: "."<br>";
    var_dump ($numeros);                       //para saber el contenido de un arreglo

    for($i=0;$i<count($numeros);$i++){
        $a=$numeros[$i];
        
            for($v=$i-1;$v>=0 && $numeros[$v]> $a; $v-- ){
                $numeros[$v+1]=$numeros[$v];
            }
            $numeros[$v+1]=$a;
    }
    echo "<br>"."<br>"."Arreglo ordenado: ";

    for($i=0;$i<count($numeros);$i++){
        echo $numeros[$i]." ";
    }
?>