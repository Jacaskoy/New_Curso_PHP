<?php

require_once "conexion.php";

class ModeloFormularios{

#Registro#

	static public function mdlRegistro($tabla, $datos, $token){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, email, password) VALUES(:token, :nombre, :email, :password)");
#bindParam#
		$stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
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

		/*=============================================
		Actualizar Registro
	===============================================*/

		static public function mdlActualizarRegistro($tabla, $datos){


			// var_dump($datos);
			// die();
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE (token = :token)");
#bindParam#

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			 print_r(Conexion::conectar()->errorInfo());


		}

		$stmt->close();
		$stmt = null;
	}


/*=============================================
	Eliminar Registro
	=============================================*/
	static public function mdlEliminarRegistro($tabla, $valor){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE token = :token");

		$stmt->bindParam(":token", $valor, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	/*=============================================
		Actualizar Intentos fallidos
	===============================================*/

		static public function mdlActualizarIntentosFallidos($tabla, $valor, $token){

		

			// UPDATE `registros` SET `intentos_fallidos` = '2' WHERE `registros`.`id` = 10;

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos_fallidos = :intentos_fallidos WHERE (token = :token)");
#bindParam#



		$stmt->bindParam(":intentos_fallidos", $valor, PDO::PARAM_INT);
		$stmt->bindParam(":token", $token, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		 $stmt->close();
		$stmt = null;
	}


}