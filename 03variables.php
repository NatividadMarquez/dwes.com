
<?php
define("SALTO","<br>");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables: 03variables.php</h1>
    <h2>definicion de una variable</h2>
    <?php
    //Las variables se definen con $identificador
    $nombre_variable = "Valor de la variable";

    //Variables que no se han definido. La variable $numero no existe
    $resultado = $numero + 25;
    echo "El valor de numero es $numero y el resultado es $resultado<br>";

    $resultado = $sin_definir + 5.5;
    echo "El valor de numero sin definir es $sin_definir y el resultado es $resultado<br>";

    //Si la variable está en un contexto lógico su valor
    //logico asume por defecto False

    //http:(protocolo)//servidor.com/ruta/?/recursos/index.html... lo siguiente 
    //variables globales que permiten acceder a formularios

    ?>
    <h2>Análisis de variables</h2>
    <h3>analisis simple</h3>

    <?php
    //consiste en introducir una variable en una cadena con " o heredoc
    // para incrustar su valor dentro de la cadena
    echo "El resultado es resultado<br>";

    ?>
    <h3>Análisis completo</h3>

    <?php
    //En algunas situaciones nos encontramos ambiguedad en una variable
    // interpolada. Para ello usamos las llaves y se elimina la ambiguedad {}
    //si metemos la variable entre llaves entonces siempre se considerara como tal
    $calle ="Trafalgar  sq";
    $numero = "5";
    $poblacion ="London";
    $distrito ="5000";

    echo "Mi direccion en Londres es {$numero}th, $calle<br>$poblacion<br>$distrito<br>";
    //nos saldra un warning porque se ha juntado th con el nombre de la variable
    //se ha dado una ambiguedad.Cuando se encuentra un $ va a seguir leyendo hasya
    //que pare. Para juntarlos {$numero}th para separar la variable del texto,
    //de esta forma nos sirve para propiedades de objetos. 
    ?>

    <h2>Funciones para variables</h2>

    <?php
    //Funcion gettype()
    //
    echo "El tipo de datos de $resultado es" .gettype($resultado). "<br>";
    echo "El tipo de datos de una expresion es" .gettype($numero + 5.5). ">br>";

    //Funcion empty()
    /* Comprueba si una variable tiene un valor
    -si es entero devuelve True, si es 0, False en caso contrario.
    -si es float devuelve true si es 0.0, false en caso contrario
    -si es cadena devuelve true si es "". fañse en caso contrario
    -devuelve true si es NULL o False
    */
    if(empty($numero)) echo"\$numero tiene el valor $numero<br>";
    else echo "\$numero tiene valor no vacio<br>";

    $numero = NULL;
    if(empty($numero)) $numero = 18;
    else echo "\$numero ya que tiene valor asignado y es $numero<br>";

    //Funcion isset()
    //Devuelve True si la variable esta definida y no es NULL
    //para comprobar parametros de formularios

    if (isset($nueva_variable)) echo "La variable no esta definida<br>";
    else echo "la variable $variable_null no esta definida o tiene valor NULL";

    $variable_null = NULL;
    if (isset($variable_null)) echo "La variable esta definida<br>";
    else echo "la variable $variable_null no esta definida o tiene valor NULL";

    /* Funciones que comprueban los tipos de datos
    -is_bool() -> True si la expresion es booleana
    -is_int()->True si la expresion es integer 
    -is_float()-> True si la expresion es float
    -is_string()->True si la expresion es cadena
    -is_array() ->True si la expresion es un array
    
    En cualquiero otro caso devuelove False*/

    $edad =25;
    $mayor_edad=$edad > 18;
    $numero_e=2.71;
    $mensaje="El numero e es" . $numero_e. "<br>";

    if(is_int($edad)) echo "\$edad es entero<br>";
    if (is_bool($mayor_edad)) echo "\$mayor_edad es booleana<br>";
    if(is_float($numero_e)) echo "\$numero_e es float<br>";
    if (is_string($mensaje)) echo "\$mensaje es una cadena<br>";
    
    ?>
    <h2>Constantes</h2>
    <p>Una constante es un valor con nombre que no puede cambiar de valor en el programa. Se le asigna
        un valor en la declaracion y permanece inmutable.Se definen de dos formas, normalmente al
        principio del script.<br>
        mediante la funcion define()<br>
        mediante la palabra clave const<br>
    </p>

    <?php
    define ("PI",3.14159);
    define("PRECIO_BASE",1500);
    define("DIRECTORIO_SUBIDAS","/uploads/archivos");

    echo "El numero PI es" .PI. "<br>";
    $area_circulo = PI*PI*5;
    echo "El area del circulo de radio 5 es $area_circulo<br>";
    //las constantes no se interpolan, solo las variables, por eso lo ponemos asi

    $path_archivo = DIRECTORIO_SUBIDAS ."/archivo.pdf";
    echo "El archivo subido es $path_archivo<br>";

    $precio_rebajado = PRECIO_BASE - PRECIO_BASE * 0.25;
    echo "El precio rebajado es $precio_rebajado<br>";

    const SESION_USUARIO = 600;
    echo "La sesion de usuario finaliza en " .SESION_USUARIO. "segundos<br>";
    
    //constantes predefinidas por PHP
    echo "El script es" . __FILE__. "y la linea es" .__LINE__. "<br>";

    ?>
    
</body>
</html>