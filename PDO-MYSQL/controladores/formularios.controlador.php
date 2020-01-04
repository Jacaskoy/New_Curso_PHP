<?php

class ControladorFormularios{

/*=============================================
 Registro
===============================================*/

	static public function ctrRegistro(){

		if (isset($_POST["registroNombre"])){

			$tabla = "registros";

			$datos = array("nombre" => $_POST["registroNombre"],
		        "email" => $_POST["registroEmail"],
		        "password" => $_POST["registroPassword"]);

			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
			return $respuesta;
		
		}
	}	
	/*=============================================
		Seleccionar Registro
	===============================================*/
 
	static public function ctrSeleccionarRegistros(){

		$tabla = "registros";
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);
		return $respuesta;
		
	}
	/*=============================================
		Ingreso
	===============================================*/
	
	public function ctrIngreso(){

		if (isset($_POST["ingresoEmail"])){

			$tabla = "registros";
			$item = "email";
			$valor = $_POST["ingresoEmail"];

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla $item, $valor);



	}

}