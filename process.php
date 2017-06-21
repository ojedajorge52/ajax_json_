<?php
$tag=$_POST['tag'];

$conexion_db=mysqli_connect("localhost","root","")
	or die("Conexión denegada");
$db=mysqli_select_db($conexion_db,"ajax")
	or die("La base de datos no existe");



if(isset($tag) && $tag !==''){
	switch ($tag) {
		case 'login':
			$result=mysqli_query($conexion_db,"SELECT*FROM usuarios");
			$fila=mysqli_fetch_array($result);
			$username=$fila['1'];
			$password=$fila['2'];
			if ($_POST['username']==$username && $_POST['password']==$password) {
			echo true;
		echo false;
		}
			break;
		case 'nuevo':
		$nombre=$_POST['nombre'];
		$escolaridad=$_POST['escolaridad'];
		$edad=$_POST['edad'];
		$origen=$_POST['origen'];
			$result=mysqli_query($conexion_db, "INSERT INTO registros(id,nombre,escolaridad,edad,origen) VALUES('','$nombre','$escolaridad','$edad','$origen')");
			if($result==true){
				echo true;
			echo false;	
			}
			break;
		
		default:
			echo "ajaaaa";
			break;
	}
}
