<?php

$con=mysqli_connect('localhost','root','','crecid');
include_once("conexion.php");

        $hospital = $_POST["hospital"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];
		#Aqui vamos a Actualizar los datos ingresados(los valores deben de ser iguales a los de nuestra base de datos)
		$actualizardatos = "UPDATE hospital SET NombreHospital= '$hospital',
                                            Direccion = '$direccion',
                                            Telefono ='$telefono' 
                                            WHERE hospital.NombreHospital = '$hospital'";
												
		$ejecutarActualizacion = mysqli_query($con,$actualizardatos);

        if(!$ejecutarActualizacion){
            echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
        } else{
            header("Location: index.php");
        }

?>
