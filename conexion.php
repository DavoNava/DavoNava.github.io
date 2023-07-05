<?php
//conexion a una base de datos y el servidor
  $link = mysql_connect("localhost","root","") or die ("<h2> Nos e encuentra el servidor>/h2>");;
  $db = mysql_select_db("users page nava12",$link) or die("<h2>Error de conexion</h2>");

 //obtenemos los valores del formulario
   $Usuario=$_POST['User'];
   $Email=$_POST['Mail'];
   $Company=$_POST['Comp'];
   $Password=$_POST['Pass'];
   $rPass=$_POST['rPass'];

   //Obtiene la longitud de un string
   $req = (strlen($Usuario)*strlen($Email)*strlen($Company)*strlen($Password)) or die("No se han llenado todos los campos"<br><br><a href="Pagina 1 de presentacion Nava.html">Volver</a>);

   //se confirma la contraseña
   if($Password !=rPass){
    	die('Las contrase&ntilde;as no coinciden <br><br> <a href="Pagina 1 de presentacion Nava.html">Volver</a>');
   }

   // Se encriota la contraseña
   $contraseñausuario = md5($Password)


   //Ingresar la informacion a la tabla de datos
   mysql_query("INSERT INTO registros VALUES('','$Usuario','$Email','Company','Password','rPass')",$link) or die("<h2>Error de envio de datos</h2>");

   echo '
        <h2>Registro Completo</h2>
        <h5> Gracias por registrarse, ya puedes inicair seción :) </h5>
   ';


   	# code...  https://www.youtube.com/watch?v=fOqPD-tpPj0