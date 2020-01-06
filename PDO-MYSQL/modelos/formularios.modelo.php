<?php

require_once "conexion.php";

class ModeloFormularios{

#Registro#

	static public function mdlRegistro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES(:nombre, :email, :password)");
#bindParam#
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();
		$stmt = null;
	}
	/*=============================================
		Seleccionar Registro
	===============================================*/

	static public function mdlSeleccionarRegistros($tabla, $item,$valor){

		if ($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

		$stmt->execute();
		return $stmt -> fetchAll();

	}else{

		$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt -> fetch();

	}
		$stmt->close();
		$stmt = null;
	}
}