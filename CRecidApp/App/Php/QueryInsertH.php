<?php
$con=mysqli_connect('localhost','root','','crecid');
	include_once("conexion.php");


	#Mediante el _POST recibimos los datos
	if(isset($_POST['btnEnviar'])) {

	
		$hospital = $_POST["hospital"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];

		
		#Aqui vamos a insertar los datos ingresados(los valores deben de ser iguales a los de nuestra base de datos)
		$insertardatos = "INSERT INTO hospital(NombreHospital,Direccion,Telefono) VALUES ('$hospital',
														'$direccion','$telefono') ";
												
		
		$ejecutarInsertar = mysqli_query($con,$insertardatos);



	
        if($ejecutarInsertar){
			
            echo "<script>alert('Se ha registrado el usuario con éxito');
            window.location='../Php/RegHosp.php'</script>";
			
			
        } else{
            echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
        }
		


    }

    ?>

