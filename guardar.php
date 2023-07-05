<?php
//conexion con el servidor
  $conectar = mysql_connect('localhost',"root","");
  //verificamos la conexion
  if(!$conecatar){
  	echo"No se pudo conectar con el servidor";
  }else{
  	$base=mysql_select_db('prueba')
  	if(!$base){
  		echo"No se encontro la base de datos";
  	}
  }
  //recuperer las variables
  $usuario=$_POST['usuario'];
  $email=$_POST['email'];
  $empresa=$_POST['empresa'];
  $contraseña=$_POST['contraseña'];
  $confirmar=$_POST['confirmar'];
  //hacemos la sencuencia de sql
  $sql="INSERT INTO datos values('$usuario',
                                 '$email',
                                 '$empresa',
                                 '$contraseña',
                                 '$confirmar')";
  //ejecutamos la secuencia
  $ejejcutar=mysql_query($sql);
  //Verificamos la ejecucion
  if(!$ejecutar){
  	echo"Hubo algun error";
  }else{
  	echo"Datos guardados correctamente<br><a href='index.html'>volvel</a>";
  }

?>