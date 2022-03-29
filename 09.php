<?php include 'includes/header.php';

//Conectar con la base de datos 

$db = new mysqli("localhost", "root", "root", "bienes_raices");

//Creamos el query

$query ="SELECT titulo, imagen FROM propiedades";

//Lo preparamos

$stmt = $db->prepare($query);

//Lo ejecutamos

$stmt->execute();

//Creamos la variable

$stmt->bind_result($titulo, $imagen);

//Asignamos el resultado

$stmt->fetch();

//Imprimimos el resultado 

while($stmt->fetch()):
var_dump($titulo);
var_dump($imagen);
endwhile;

include 'includes/footer.php';