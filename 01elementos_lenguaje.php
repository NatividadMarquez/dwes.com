<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

?>

    <h2>entrada y salida</h2>
    <p>La entrada de datos de php es con un formulario o con un enlace. La salida datos
        se produce con la funcion echo y su forma abreviada con print. Ademas, para salida de datos con 
        formato tenemos printf
    </p>

    <h3>Función echo</h3>

    <?php
    echo "<p>la funcion echo emite el resultado de una expresion a la salida, se puede
    usar como funcion o como construccion del lenguaje (sin parentesis)</p>";
    echo "<p>esto es un parrafo HTML enviado por echo</p>";

    $nombre="Juan";
    echo "Hola", $nombre, "como estas?<br>";

    //echo("hola"$nombre,"como estas? <br>); no sirve, hay mas de un argumento
    echo "hola", $nombre,"como estas? <br>";
    echo ("Hola,juan,como estas? <br>");

    //Quiero un salto de linea al final de la linea
    echo "hola, esta linea acaba en un salto\n";
    echo "supuestamente esta linea es la siguiente a la anterior\n y esta va despues";

    $nombre="jose";
    $apellidos="gomez";

    echo"<br>Mi nombre es $nombre y mi apellido es $apellidos<br>";
    //forma mas habitual es con punto
    echo "<br>Mi nombre es" .$nombre. "y mi apellido es" .$apellidos. "<br>";

    echo "<br>Uno mas dos son ", 1+2, "y tiene que haber salido 3<br>";
    //El operador punto no tiene preferencia sobre el operador suma +
    echo "<br>Uno mas dos son ", 1+2 . "y tiene que haber salido 3<br>";

    echo "<h4>Forma abreviada de echo</h4>";
    echo "<p>Cuando hay que enviar a la salida el resultado de una expresion pequeña disponemos
    de la forma abreviada de echo que permite intercalarse en el codigo html con menos 
    esfuerzo</p><br>";
    
    ?>    

    <!-- la forma abreviada de echo va dentro de html -->
    <!-- &tl;?=expresion?&gt; equivale a &lt?php echo expresion ?&gt; -->

    <p>Mi nombre es <?= $nombre ."" . $apellidos?> y estoy programando PHP</p>

    <!-- uso habitual. valores por defecto en controles de formulario-->
     <input type='text' name='nombre' size='15' value='<?=$nombre?>'><br>
     <input type='checkbox' name='portatil' <?=$tiene_portatil ? 'checked': ''?>>¿tienes portatil?
    
     <!-- consejo; las cadenas en PHP con " y en HTML con ' -->
    
    <?php

    echo "<br><input type='text' name='apellidos' size='50'>";
    ?>
    
    <h3>Funcion print</h3>
    <p>Funciona igual que echo</p>

    <?php
    
    print "<p>Esto es una cadena \n que tiene mas de una linea \n y se envian a la salida>/p>";
    print "<p>Mi nombre es $nombre $apellidos</p>";

    ?>
    <h3>Funcion printf</h3>

    <?php
    $pi = 3.141559;
    $radio = 3;
    $circunferencia = 2*$pi* $radio;
    printf("<br>La circunferencia de radio %d es %.2f", $radio, $circunferencia);
    ?>

</body>
</html>