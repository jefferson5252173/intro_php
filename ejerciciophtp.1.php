<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inteoduccion_php</title>
</head>
<body>
<h1>Sistemas</h1>
<h2>Guanentá</h2>
<hr>
<?php
//La función echo permite realizar la impresión de texto echo "Primera página con PHP";
//Esto es un comentario
//Variables
/*En PHP las variables se declaran con el signo $ seguido del nombre de la variable. El nombre de la variable es sensible a las minusculas y mayuscula. Debe empezar por una letra o raya de piso. Se recomienda inicializar las variables. Se puede utilizar las funciones isset() o empty() para determinar si una variable ha sido inicializada. destruir una variable se utiliza la función unset()*/ Para
:
//Ejemplos
$nombre_variable = "Nestor";
$Nombre_Variable = "Jesus";
$ mivariable = 23456;
$N_1_2_a_b = 32.15;
$variable;
$mi_variable = isset($ mivariable); /
/Retorna verdadero
/Retorna falso
$mi_variable = !empty($variable); /
unset($ mivariable);
//Elimina la variable
echo "<h3><br>";

//Definición
$numero= 80;
//Visualización de variables
echo "Variable numérica: ".$numero;

echo "</h3>";

?>
</body>
</html>