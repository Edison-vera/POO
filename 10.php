<?php include 'includes/header.php';


//Conectar a la BD con PDO

$db = new PDO("mysql:hots=localhost; dbname=bienes_raices", "root", "root", );

//Creamos el query
$query ="SELECT titulo, imagen FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Obtenemos los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Iteramos
foreach($resultado as $propiedad):

    echo $propiedad["titulo"];
    echo"<br>";
    echo $propiedad["imagen"];
    echo"<br>";
  
endforeach;


include 'includes/footer.php';