<?php


class ControladorBlog{

    /*-=====================================
	Mostrar contenido de tabla blog
	======================================-*/
    static public function ctrMostrarBlog(){

        $tabla ="blog";

        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);

        return $respuesta;
        
    }

    /*-=====================================
	Mostrar contenido de tabla catetegorias
    ======================================-*/
    
    static public function ctrMostrarCategorias(){

        $tabla ="categorias";

        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla);

        return $respuesta;
        
    }

    /*-=====================================
	Mostrar articulos y catetegorias con inner join
    ======================================-*/

    static public function ctrMostrarConInnerJoin($desde, $cantidad, $item, $valor){


        $tabla1 = "categorias";
        $tabla2 = "articulos";

        $respuesta = ModeloBlog::mdlMostrarConInnerJoin($tabla1, $tabla2, $desde, $cantidad, $item, $valor);
        
        return $respuesta;

    }

     /*-=====================================
	Mostrar total  articulos
    ======================================-*/

    static public function ctrMostrarTotalArticulos(){

        $tabla = "articulos";

        $respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla);

        return $respuesta;

    }

    }

