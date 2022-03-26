<?php

declare(strict_types = 1);
include 'includes/header.php';

//ENCAPSULACIÓN

class Producto {
    
    // Public: Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // Protected: Se puede acceder y modificar unicamente en la clase
    // Private: Solo mienbros de la misma clase pueden acceder a el 

    public function __construct(protected string $nombre,public int $precio,public bool $disponible){ 
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
  
$producto = new Producto("Table", 200 , true);
// $producto->mostrarProducto();
echo$producto->getNombre();
$producto->setNombre("Nuevo nombre");

 echo"<pre>";
 var_dump($producto);
 echo"</pre>";

$producto2 = new Producto("Monitor Curvo", 400 , false);
echo$producto2->getNombre();
// $producto2->mostrarProducto();
// echo"<pre>";
// var_dump($producto2);
// echo"</pre>";


include 'includes/footer.php';
