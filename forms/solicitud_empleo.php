<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/funciones.php");

inicio_html("Proceso de formulario 1", ["/estilos/general.css"]);

if( $_SERVER ['REQUEST METHOD']=='POST'){
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$perfil_likedin = $_POST['linkedin'];
$fecha_disponible = $_POST['fecha_disponible'];
$hora_entrevista = $_POST['hora_entrevista'];
$salario = $_POST['salario'];
$areas = $_POST['areas'];
$modalidad=$_POST['modalidad'];
$tipo_contrato=$_POST['habilidades'];
$comentarios=$P_POST['comentarios'];
$operacion=$_POST['operacion'];


echo "Nombre: $nombre<br>";
echo "Email: $email<br>";
echo "Clave: $clave<br>";
echo "URL perfil: $perfil_linkedin<br>";
echo "Fecha disponibilidad: $fecha_disponible<br>";
echo "Hora entrevista: $hora_entrevista<br>";
echo "salario: $salario<br>";

$areas_interes =[
    "ds" => "Desarrollo Web",
    "gd" => "Diseño gráfico",
    "mk" => "Marketing",
    "rh" => "Recursos humanos"

];
//para ver si existe un array
echo "Areas de interés; ";
foreach($areas as $area){
    if(array_key_exists($area,$areas_interes))
        echo"{$areas_interes[$area]}";

}

echo "<br>";
echo "Modalidad:$modalidad<br>";
echo "tipo de contrato: $tipo_contrato<br>";

$habilidades_disponibles=[
    "js"=> "JavaScript",
    "py"=>"Python",
    "uxui"=>"diselo UX/UI",
    "seo"=> "SEO",
    "gp"=>"Gestor de Proyectos"

];
echo "habilidades";
foreach($habilidades as $habilidad) {
    echo "$habilidad";}
echo "<br>";
echo "comentarios:$comentarios<br>";
echo "operacion en la peticion: $operacion<br>";
}//se cierra aqui el if porque la condicion es que se cumpla todo esto
else{
    echo "Error. No se han encontrado datos<br>";
    
}


fin_html();
?>