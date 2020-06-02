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
    
    static public function ctrMostrarCategorias($item, $valor){

        $tabla ="categorias";

        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla, $item, $valor);

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

    static public function ctrMostrarTotalArticulos($item, $valor){

        $tabla = "articulos";

        $respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla, $item, $valor);

        return $respuesta;

    }

     /*-=====================================   
	Mostrar opiniones con inner join
    ======================================-*/

    static public function ctrMostrarOpiniones($item, $valor){


        $tabla1 = "opiniones";
        $tabla2 = "administradores";

        $respuesta = ModeloBlog::mdlMostrarOpiniones($tabla1, $tabla2, $item, $valor);
        
        return $respuesta;

    }

     /*-=====================================   
	Enviar Opinion
    ======================================-*/


    static public function ctrEnviarOpinion(){


        if(isset($_POST["nombre_opinion"])){
        
            if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $_POST["nombre_opinion"]) &&
            preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', 
            $_POST["correo_opinion"]) &&
            preg_match('/^[=\\$\\;\\*\\"\\?\\¿\\!\\¡\\:\\.\\,\\0-9a-zA-ZáéíóúÁÉÍÓÚ  ñÑ ]+$/',  $_POST["contenido_opinion"])){
            
            /*-=====================================   
	           VALIDACION FOTO LADO SERVIDOR
            ======================================-*/

            if (isset($_FILES["foto_Opinion"]["tmp_name"]) && !empty($_FILES["foto_Opinion"]["tmp_name"])){

            
            /*-=====================================   
	           CAPTURAR ANCHO Y ALTO ORGINAL DE LA IMAGEN Y DEFINIR LOS NUEVOS VALORES
            ======================================-*/

            list($ancho, $alto) = getimagesize($_FILES["foto_Opinion"]["tmp_name"]);

            $nuevoAncho = 128;
            $nuevoAlto = 128;

            /*-=====================================   
	           CREAMOS EL DIRECTOR DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
            ======================================-*/

            $directorio = "vistas/img/usuarios/";

            /*-=====================================   
	           DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
            ======================================-*/

            if($_FILES["foto_Opinion"]["type"] == "image/jpeg"){


                $aleatorio = mt_rand(100, 9999);

                $ruta = $directorio.$aleatorio.".jpg";

                $origen = imagecreatefromjpeg($_FILES["foto_opinion"]["tmp_name"]);

                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                imagejpeg($destino, $ruta);


            }else if($_FILES["foto_Opinion"]["type"] == "image/png"){

                $aleatorio = mt_rand(100, 9999);
                
                $ruta = $directorio.$aleatorio.".png";

                $origen = imagecreatefrompng($_FILES["foto_Opinion"]["tmp_name"]);

                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                imagealphablending($destino, FALSE);

                imagesavealpha($destino, TRUE);

                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                imagepng($destino, $ruta);

            }else{ 
                
            return "error-formato";

             }

        }else{

            $ruta = "vistas/img/usuarios/default.png";
        }
            
            
                        
            $tabla = "opiniones";
            $datos = array("id_art" => $_POST["id_art"],
                           "nombre_opinion" => $_POST["nombre_opinion"],
                           "correo_opinion" => $_POST["correo_opinion"],
                           "foto_opinion" => $ruta,
                           "contenido_opinion" => $_POST["contenido_opinion"],
                           "fecha_opinion" => date('Y-m-d'),
                           "id_adm" => 1);

            $respuesta = ModeloBlog::mdlEnviarOpinion($tabla, $datos);      
            
            return $respuesta;

            }else{
            
            return "error";
        }
         
        }
    }

    
     /*-=====================================   
	  Actuaizar vista articulo
    ======================================-*/

    static public function ctrActualizarVista($ruta){


        $articulo = ControladorBlog::ctrMostrarConInnerJoin(0, 1, "ruta_articulo", $ruta);

        $valor =  $articulo[0]["vistas_articulo"] + 1;
        
        $tabla = "articulos";

        $respuesta = ModeloBlog::mdlActualizarVista($tabla, $valor, $ruta);


    }

    /*-=====================================   
	  Articulos Destacados
    ======================================-*/
    

    static public function ctrArticulosDestacados($item, $valor){

        $tabla = "articulos";

        $respuesta = ModeloBlog::mdlArticulosDestacados($tabla, $item, $valor);

        return $respuesta;

    }

    
    
    }

    