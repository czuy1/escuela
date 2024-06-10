<?php

$nombre=$_POST["Nombre"];
$apellido=$_POST["Apellido"];
$mail=$_POST["Email"];
$mensaje=$_POST["Mensaje"];
$asunto=" Mensaje enviado desde el sitio web";
$para="gusczuha@gmail.com";

$mensaje="El mail fue enviado por ".$nombre."/r/n";
$mensaje.="Su email es ".$mail."/r/n";
$mensaje.="el asunto es".$asunto."/r/n";
$mensaje.="Mensaje".$_POST["Mensaje"];
$mensaje.="Enviado el día ".date("d,m,Y",time());



mail($para,$asunto,$mensaje,$header,TRUE);
header("location.saludo.html");

?>