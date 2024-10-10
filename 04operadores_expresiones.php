<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Expresiones,operadores y operandos</h2>
    <p>Una expresion es una combinacion de operandos y operadores que arroja un resultado.
        Tiene tipo de datos, que dependel del tipo de datos de sus operandos y de la operacion 
        realizada.<br>
        Un operador es un simbolo formado por uno, dos o tres caracteres que denota una operacion<br>
        Los operadores pueden ser:<br>
        -unarios. solo necesitan un operando
        -binarios. utilizan dos operandos 
        -ternarios. Utilizan tres operandos 
        Un operando es una expresion en si misma, siendo la mas simple un literal o una variable, 
        pero tambien puede ser un valor devuelto por una funcion o el resultado de otra expresion<br>
        Las operaciones de una expresion no se ejecutan a lña vez,sino en orden segun la precedencia 
        y asociatividad de los operadores. Esta puede alterar conveniencia.
    </p>

    <h2>Operadores</h2>
    <h3>asignacion</h3>

    <?php
    //el operador de asignacion es =
    $numero = 45;
    $resultado = $numero + 5 - 29;
    $sin_valor = NULL;


    ?>

    <h3>Operadores artimeticos</h3>

    <?php
    //+ SUMA
    //- RESTA
    //* MULTIPLICACION
    // / DIVISION
    // %Modulo, resto de una division entera
    // ** Exponenciacion, es decir eleva una base a un exponente
    //todosd estos son binarios

    /* Unarios
    + conversion a entero
    - el opuesto */

    $numero1=15;
    $numero2=18;
    $suma = $numero1 + 10;
    $resta = 25 - $numero2;
    $opuesto = -$numero1;
    $multiplicacion = $numero1 * 3;
    $division = $numero2 /3;
    $modulo = $numero1 %4; //da 3 porque es uno menos el divisor osea 4 menos 1
    $potencia = $numero1 **2;
    echo "$numero1 y $numero2" .SALTO;
    echo "$suma $resta $opuesto $multiplicacion $division $modulo $potencia" . SALTO;

    $numero3 = "35";
    $numero4= +$numero3; //convierte numero 3 a entero
    echo "el \$numero4 es $numero4 y su tipo es" .gettype($numero4) .SALTO;

    //no lo hace com float
    $numero5 = PI;
    $numero6 = +$numero5;
    echo "El \$numero6 es $numero6 y su tipo es" .gettype($numero6) . SALTO;

    $numero1 =35;
    $numero2=15;
    $resultado_entero=(int)($numero1/$numero2);
    echo "El resultado entero es $resultado_entero". SALTO;
    ?>

    <h2>Asignacion aumentada</h2>

    <?php
    /*Operadores de asignacion aumentada
    ++Incremento
    --Decremento
    +=
    -=
    *=
    /=
    %=
     */

     $numero=4;
     $numero++;
     echo "Antes numero era 4 ahora es $numero<br>";
     ++$numero; //Equivalente a $numero = $numero +1;
     echo "Antes numero era 5 ahora es $numero<br>";

     $numero=10;
     $numero =$numero++ * 2; //Postincremento porque el icremento ocurre despues. Primero se
                            //utiliza y luego se aumenta. $resultado=$numero*2; $numero=$mumero+1;
     echo "El resultado es $resultado y el numero es $numero<br>";

     $numero=10;
     $resultado=++$numero *2;//cuando esta delante de la variable es el operador de preincremento
                            //equivale a $numero=$numero + 1;$resultado = $numero*2;
     echo "El resultado es $resultado y el numero es $numero<br>";

     $numero+=5; //Equivale a $numero=$numero+5;
     echo "El numero es $numero<br>";
     $numero-=3; //Equivale a $numero=$numero -3;
     echo "el resultado es $numero<br>";

     $numero *=3; //Equivale a $numero=$numero*3;
     echo "El numero es $numero<br>";

     $numero %=7; // Equivale a $numero =$numero= $numero %7;
     echo "El numero es $numero<br>";
    ?>
    <h2>Operadores relacionales</h2>

    <?php
    /*
    == igual a 
    === identico a
    != distinto
    !== distinto valor o tipo
    > mayor que
    < menor que
    >= mayor o igual
    <= menor o igual
    <=> Nave espacial
    */

    $n1 = 5;
    $cadena = "5";
    $n2 = 8;

    $resultado = $n1 == $n2; 
    echo "El n1 igual que n2: " . (int)$resultado . "<br>";
    $resultado = $n1 ==$cadena;
    echo "Es n1 igual que cadena: ". (int)$resultado . "<br>";
    //operador == Es true si los valores de los operandos son iguales y del mismo tipo.
    $resultado = $n1 == $cadena;
    echo "Es n1 identico a la cadena: " . (int)$resultado . "<br>";

    $resultado = $n1 != $n2;
    echo "es n1 distinto de n2: " . (int)$resultado . "<br>";

    //operador !==. Es true si son distintos o de diferente tipo, false en caso contrario.
    $resultado = $n1 !== $cadena;
    echo "es n1 distinto de cadena: " . (int)$resultado . "<br>";
    $resultado = $n1 !== $cadena;
    echo "es n1 distinto de cadena: " . (int)$resultado . "<br>";

    //nave espacial
    //si n1 es mayor que n2, devuelve 1
    //si n1 es igual que n2, devuelve 0
    //si n1 es menor que n2, devuelve -1
    //Se emplea para evitar esto:
    //if ($n1 < $n2){
    //
    //elsif ($n1 ==$n2)
    //else
    //
    //}
    $resultado = $n1 <=> $n2;
    echo "Es n1 menor, igual o mayor que n2: $resultado<br>";

    $nombre1 = "Zacarias"; //la extension de caracteres se mide por el codigo ASCI.
    $nombre2 = "adela";
    $resultado = $nombre1 > $nombre2;
    echo "El resultado es " . (int)$resultado . "<br>";

    $nombre1 = "MariO";
    $nombre2 = "Maria";
    $resultado = $nombre1 < $nombre2;
    echo "El resultado es " . (int)$resultado . "<br>";

    $nombre1 = "maria";
    $nombre2 = "Maria";
    $resultado = $nombre1 < strtolower($nombre2);
    echo "El resultado es " . (int)$resultado . "<br>";

    ?>

    <h2>Operadores logicos</h2>

    <?php
    // AND      And lógico o conjuncion logica
    //or        Or logico o disyuncion logica
    //Xor       Or exclusivo
    //!         not
    //&&        and logico
    // ||       or logico

    $n1 =9;
    $n2=5;
    $n3=10;
    
    $resultado = $n1==$N2 OR $n2 > $n3;
    $resultado = $n1==$N2 AND $n2 < $n3; //cuando la evaluacion de la primera expresion se cumple, no hace falta evaluar la otra

    echo "El resultado es: " .(int)$resultado ."<br>";
    $resultado = $n1 == 9 OR $n2 < $n1 AND $n3 > 10;
     // AND tiene mayor preferencia que el OR
     echo "El resultado es: " . (int)$resultado . "<br>";

     $resultado1 = ($n1 == 9 OR $n2 < $n1);
     $resultado = $resultado1 AND $n3 >10;
     // AND tiene mayor preferencia que el OR
     echo "El resultado es: " . (int)$resultado1 . "<br>";
     //con el parentesis 

     //primero las aritmeticas relacionales y logicas"
     "FALTAN COSAS" 

    ?>
    
</body>
</html>

