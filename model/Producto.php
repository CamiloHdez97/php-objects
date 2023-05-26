<?php 

    class Producto {

        private $nombre;
        private $precio;
        private $disponible;
        private $cantidad;
        static $valorTotal = 0;

        public function __construct($nombre,$precio,$disponible,$cantidad){

            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->disponible = $disponible;
            $this->cantidad = $cantidad;

        }
        
        //Getter
        public function getNombre(){
            return $this->nombre;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function getDisponible(){
            echo $this->disponible?'Dispobible':'No disponible';
        }

        public function getCantidad(){
            return $this->cantidad;
        }

        //Setter
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function setDisponible($disponible){
            $this->disponible = $disponible;
        }

        public function setCantidad(){
            $this->cantidad = $cantidad;
        }

        public function valor_total (){

            return self::$valorTotal += $this->precio;
            
        }

    }

    //$producto3->valor_total(); // Actualizar el valor total

    //Obtener el valor total acumulado
    //echo "Valor total acumulado: " . Producto::$valorTotal;

?>

