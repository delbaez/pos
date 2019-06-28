<?php
    class ArticulosControlador{

            public function listar(){
                include "Vista/Articulos/Articulos.php";
            }
            public function crear(){
                include "Vista/Articulos/nuevo.php";
                
            }
            public function eliminar($parametro){
                echo "Eliminando el articulo". $parametro;
            }
    }


?>