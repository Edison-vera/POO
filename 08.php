<?php include 'includes/header.php';


//Incluir las otras clases 

//  require "clases/clientes.php";
//  require "clases/detalles.php";

use App\Clientes;
use App\Detalles;


//Incluir las otras clases 
 function mi_autoload($clase){
    
     $partes = explode("\\", $clase);
     
     require __DIR__ . "/clases/" . $partes[1] . ".php";
 }

 spl_autoload_register("mi_autoload");





$detalles = new Detalles();
echo"<br>";
$clientes = new Clientes ();
echo"<br>";



include 'includes/footer.php';