<?php

declare(strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

//Metodos estaticos

class Producto {
    
    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";


    public function __construct(protected string $nombre,public int $precio,public bool $disponible, string $imagen){ 
    if($imagen){
        self::$imagenPlaceholder = $imagen;
    }
    }
    
    public static function obtenerImangenProducto (){
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto (){
        echo "Obteniedo datos del producto";
    }
    
    public function mostrarProducto(): void {
    echo "El producto es: " . $this->nombre . " y su precio es de " . $this->precio;    
    }

    public function getNombre () : string{
    return $this->nombre;
    }

    public function setNombre (string $nombre){
        $this->nombre = $nombre;
        }
    
}
  


$producto = new Producto("Table", 200 , true, "");
// $producto->mostrarProducto();

echo$producto->obtenerImangenProducto();

echo$producto->getNombre();
$producto->setNombre("Nuevo nombre");

 echo"<pre>";
 var_dump($producto);
 echo"</pre>";

$producto2 = new Producto("Monitor Curvo", 400 , false, "monitorCurvo.jpg");
echo$producto2->getNombre();

echo$producto2->obtenerImangenProducto();
// $producto2->mostrarProducto();
// echo"<pre>";
// var_dump($producto2);
// echo"</pre>";


include 'includes/footer.php';
