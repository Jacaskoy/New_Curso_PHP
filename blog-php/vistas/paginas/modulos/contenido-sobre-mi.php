
<div class="container-fluid bg-white">
	
    <div class="container py-4">

    <div class="row">

    <div class="col-12 col-lg-6">

    <?php

    echo $blog["sobre_mi_completo"];
    
    ?>

</div>

<div class="col-12 col-lg-6">

<h4 class="mt-4">Contáctenos</h4>

<form method="post">

<input type="text" class="form-control my-3" name="nombreContacto" placeholder="Nombre y apellido" require>

<input type="email" class="form-control my-3" name="emailContacto" placeholder="Escriba su correo electronico" require>

<textarea name="mensajeContacto" class="form-control my-3" id="" cols="30" rows="10"></textarea>

<input type="submit" class="btn btn-primary" value="Enviar">

<?php

$enviarCorreo = ControladorCorreo::ctrEnviarCorreo();

if ($enviarCorreo != ""){

    echo '<script>
	 if ( window.history.replaceState ) {
	 window.history.replaceState( null, null, window.location.href );
	 }
				
    </script>';

        if($enviarCorreo == "ok"){


            echo '<script>
            
            notie.alert({

                type: 1,
                text: "El mensaje ha sido enviado correctamente, espere muy pronto 
                una respuesta",
                time: 10
            })
                        
            </script>';
        }

        if($enviarCorreo == "error"){


            echo '<script>
            
            notie.alert({

                type: 3,
                text: "No se pudo enviar el mensaje, intentelo nuevamente",
                time: 10
            })
                        
            </script>';
        
    }

    if($enviarCorreo == "error-sintaxis"){


        echo '<script>
        
        notie.alert({

            type: 3,
            text: "Error, no se permiten caracteres especiales, inténtelo nuevamente",
            time: 10
        })
                    
        </script>';

    
}
    
}



?>

</form>

    </div>

</div>
    
    </div>

</div>