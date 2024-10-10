<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <p>tipo de datos escalares(primitivos)</p>
    <ul>
        <li>Booleanos</li>
        <li>numero entero</li>
        <li>en coma flotante</li>
        <li>cadena de caracteres</li>
    </ul>
    <p>datos compuestos</p>
    <ul>
        <li>Arrays</li>
        <li>objetos</li>
        <li>callable</li>
        <li>interable</li>
    </ul>
    <p>tipos especiales</p>
    <ul>
        <li>resource</li>
        <li>null</li>
    </ul>
    <h2>boolean</h2>
    <p>inicialmente las constantes True y False. Sin embargo, otros tipos de datos tienen 
        conversion inplicita al tipo boolenao
    </p>
    <ul>
        <li>numérico entero: 0 y -0(false) cualquier otra cosa es True</li>
        <li>numérico en coma flotante: 0.0 y -0.0(false) otro valor es True</li>
        <li>un array con 0 elementos es false, con elementos es true</li>
        <li>el tipo especial NULL es false, otro valor distinto de null es true</li>
        <li>una variable no definida es false</li>
    </ul>
    <?php
    $valor_booleano=True;
    $edad=20;
    $mayor_edad=$edad > 18;

    echo "mayor de edad es boolenao: " .is_bool($mayor_edad);

    $dinero = 0;
    //equivalente a $dinero !=0
    if ($dinero ) echo "Soy rico<br>";
    else echo "<br>Estoy arruinado<br>";

    $mi_nombre="Juan";
    if ($mi_nombre) echo "Me llamo $mi_nombre<br>";
    else echo "No tengo nombre<br>";
    ?>

    <h2>Enteros</h2>
    <p>Numeros enteros en php son de 32 bts(depende de la plataforma). 
        Pueden expresarse en diferentes notaciones</p>

    <?php
    $numero_entero = 1234;
    echo "El numero entero es $numero_entero<br>";

    $numero_negativo = -123;
    echo "Un numero negativo con - delante: $numero_negativo<br>";

    //Si quiero expresar un numero entero en octal
    $numero_octal = 0123;
    echo "El numero 0123 en cotal es en decimal: $numero_octal<br>";

    //Puedo mostrat un numero en octal
    echo "El numero $numero_octal es en octal. decot($numero_octal).<br>";

    //Numero entero en hexadecimal
    $numero_hex = 0x8AE;
    echo "El numero 0x8AE en hexadecimal es en decimal: $numero_hex<br>";

    //Mostrar un numero expresado en Hexadecimal
    echo "El numero $numero_hex en hexadecimal es " .dechex($numero_hex) . "<br>";

    //UJn numero entero en binario
    $numero_binario = 0b110101101;
    echo "El numero 110101101 es en decimal: $numero_binario<br>";

    //Mostrar un numero expresado en binario
    echo "El numero $numero_binario en binario es " . decbin($numero_binario) . "<br>";

    ?>

    <h2>Numeros en Punto flotante</h2>
    <p>El separador decimal es el punto y se puede expresar numeros muy grandes o muy pequeños mediante
        la notacion cientifica con base 10
    </p>

    <?php

    $pi=3.14159;
    echo "El numero PI es $pi<br>";
    echo "El pi con 2 decimales es " .round($pi,2) ."<br>";

    $inf_int =7.9e13;
    echo "Informacion que circula en internet en un dia $inf_int <br>";

    $tamaño_virus = 0.2e-9;
    echo "Un virus tiene un tamaño de $tamaño_virus<br>";


    ?>
    <h2>Cadena de caracteres</h2>
    <p>Un string o cadena es una serie de caracteres donde cada caracter equivale a un
        bite, esto significa que PHP solo admite 256 caracteres y por ello no ofrece soporte nativo
        a utf8. Un literal de tipo string se expresa de 4 formas: 
   
    </p>

    <ul>
        <li>Comillas simples</li>
        <li>Comillas dobles</li>
        <li>Heredoc</li>
        <li>Nowdoc</li>
    </ul>

    <h3>Comillas simples</h3>

        <?php

        //Una cadena encerrada entre comillas simples
        //Solo admite el caracter escape \' \\

        echo 'Esto es una cadena sencilla<br>';
        echo "Puedo poner una cadena en varias lineas porque la sentencia no acaba 
        hasta el punto y coma <br>";

        //No se reconoce caracteres de escape excepto ' y el \. con barra inversa si la reconoce
        

        echo 'El mejor pub de la ciudad es o\'Donnel';
        echo 'La raiz del disco duro es C:\<br>';

        //El salto de linea no se expande
        echo "Esta cadena tiene\n mas de una linea<br>";

        //No interpola variables, no podemos meter variables en una cadena con comillas
        $mi_nombre="Manuel";
        echo "Hola", $mi_nombre, "¿como estas?<br>";

        ?>
        <h3>Comillas dobles</h3>
        <p>La forma habitual de expresar cadenas de caracteres ya que expande
            los caracteres de espace y las variables
        </p>

        <?php

        $cadena = "Esto es una cadena con comillas dobles";
         echo "Es una cadena un objeto?" . is_object($cadena) . "<br>";

         if (is_object($cadena) )echo "las cadenas en PHP son objetos<br>";
         else echo "Las cadenas en PHP no son objetos<br>";

         $con_secuencias_esc="\t\El simbolo\$ se emplea para las variables\n y si lo
         quieres en una cadena hay que escaparlo con \\. Es mejor usar \"para delimitar las cadenas 
         en lugar de '<br>";
         echo $con_secuencias_esc;
        ?>

        <h3>cadenas HEREDOC</h3>
        <p>Es una cadena muy larga que comienza con <<< le sigue un identificador y justo después
            un salto de linea. A continuacion se escribe la cadena, con los saltos de linea que 
            necesitemos,
        podemos interpolar variables y poner caracteres de escape. Para finalizar hay que hacer un salyo
        de linea y volver a poner el identidicador</p>

        <?php

            $cadena_hd = <<<HD
            Esto es una cadena
            heredoc que respeta los
            saltos de linea le puedo
            poner variables como $mi_nombre y
            además secuencias de espace. EL identidicador no
            necesita $ y tampoco usamos \", simplemente la escribimos y
            acabamos con un salto de linea mas el identificador<br>
            HD;

            echo $cadena_hd;
        ?>

        <h3>Cadena NOWDOC</h3>
        <p>La cadena Nowdoc es como Heredoc con comillas simples. No se interpolan
            variables ni se reconocen secuencias de escape mas alla de \ y '. SI se respetan
            saltos de lineas
        </p>

        <?php
        $cadena_nd=<<<'ND'
        Esto es una cadena nowdoc 
        y el salto de linea no lo respeta,
        no puedo meter variables
        y solo reconoce \\ y |'.<br>
        ND;

        echo $cadena_nd;
        ?>

        <h2>Conversion de tipos de datos</h2>
        <p>Hay dos conversores: implicitas y explicitas. las primeras ocurren cuando en una expresion 
            hay operandos de diferente tipo. PHP convierte algunos de ellos para evaluar la expresion.
        </p>


        <?php
        $cadena="25";
        $numero=8;
        $booleano=True; // el true al pasarlo a numero entero es 1
        $resultado=$cadena + $numero + $booleano;
        echo "El resultado es $resultado<br>";
        ?>
        <p>Cuando se hace una conversion implicita, solo afecta al operando pero no a la variable 
            osea la conversion de cadena a entero solamente para evaluar la expresion pero cadena sigue 
            siendo de tipo string.
        </p>

        <?php
        $flotante = 3.5;
        $resultado = $cadena + $flotante + $numero + $booleano;
        echo "El resultado ahora es $resultado<br>";
        //porque el booleano es como un 1, se ha sumado 25 y 8 y tambien 3.5
            //aqui cadena no tiene valor numerico, solo 25, el resto es cadena de caracteres
            // entonces php solo tomara 25 y lo sumanra a numero, y el resto lo ignorara
            //antes se ha hecho bien la suma porque solo habia valor numerico
        $cadena = "25 marranos dan mucho provecho,mejor que 7 lechones<br>";
        $resultado= $numero + $cadena;
        echo "El resultado es $resultado<br>";
        echo "Despues de la ultima conversion<br>";

        ?>

        <p>Conversiones explicitas se conocen como casting o moldeo y se hacen 
            predenciendo la expresion con el tipo de datos a convertir entre 
            paréntesis
        </p>

        <?php
        //Si quiero convertir a un entero -> (int)expresion
        //Si quiero convertir a float -> (float)expresion
        //Si quiero convertir a string -> (string)expresion


        echo "conversiones a enteroi<br>";
        $valor_booleano=True;
        $valor_convertido = (int)$valor_booleano;
        echo "El valor convertido a entero es $valor_convertido<br>";
        $valor_float=3.14159;
        $valor_convertido=(int)$valor_float;
        echo "El valor convertido a entero es $valor_convertido<br>";
        $valor_redondeado=round($valor_float,0);

        $valor_cadena="123";
        $valor_convertido=(int)$valor_cadena;
        echo "El valor convertido a entero es $valor_convertido<br>";
        ?>






</body>
</html>