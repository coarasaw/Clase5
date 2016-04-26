<?php
	require "clases/estacionamiento.php";
    //var_dump($_POST); //verifico 	que paso por POST
    //echo "<br>";
    //die();
	$patente=$_POST['patente'];
	$accion=$_POST['estacionar'];
	$foto = $_FILES['archivo']['name'];
	
	//Verifico que valores tiene las variables
	/*
	echo " Patente $patente";
    echo "<br>";
    echo $accion;
    echo "<br>";
    echo $foto;
    echo "<br>";
    //echo "$_FILES"; // da error
    echo "<br>";
	die();
	*/

	if($accion=="ingreso"){
		estacionamiento::GuardarArchivo($_FILES,$patente);
		estacionamiento::CrearTablaEstacionados();
	}
	else{
		estacionamiento::Sacar($patente);
		estacionamiento::CrearTablaFacturado();
	}
 
	header("location:index.php");
?>
