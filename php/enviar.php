<?php 
//Nombre y apellido / Razon social
$name = $_POST["name"];
$name = stripslashes($name);
//E-mail personal / empresa
$email = $_POST["email"];
$email = stripslashes($email);
//Teléfono personal / empresa
$tel =  "(".$_POST["carac"].") ".$_POST["tel"];
$tel = stripslashes($tel); 
//Domicilio comercial ciudad
$domcomc =  $_POST["dom_com_ciudad"];
$domcomc = stripslashes($domcomc); 
//Domicilio comercial prov
$domcomp =  $_POST["dom_com_prov"];
$domcomp = stripslashes($domcomp); 
if ($domcomp == "C.A. Buenos Aires"){
	$domcomc = "C.A. Buenos Aires";
	$domcomc = stripslashes($domcomc);
	$domcomp = "-."; 
	}
//Observaciones o mensaje
if ($_POST["msj"] == ""){
		$msj = "El cliente no escribio Observaciones.";
		$msj = stripslashes($msj);
	} else {
		$msj = $_POST["msj"];
		$msj = stripslashes($msj);
	}

$mail = "airblockbahiablanca@gmail.com";
$asunto = "Consulta - ".$name;
$cuerpo =  "Consulta recibida desde www.airblockbahiablanca.com.ar

Detalles del contacto:
	♦ Nombre y apellido / Razon social: ".$name."
 	♦ E-mail personal / empresa: ".$email."
	♦ Teléfono personal / empresa: ".$tel."
	♦ Domicilio: 
		-Provincia: ".$domcomp."
		-Ciudad: ".$domcomc."
	♦ Observaciones o mensaje: 
		-".$msj;
					
$envia = mail(utf8_decode($mail),utf8_decode("".$asunto.""),utf8_decode($cuerpo),utf8_decode("From: ".$email.""));

$asunto = "Airblock Bahía Blanca - 	Hemos recibido su consulta";
$cuerpo =  "Airblock Bahía Blanca - Distribuidor oficial en la ciudad, zona de influencia y Sur del país.
--------

Estimado ".$name.",

Hemos recibido su consulta, le responderemos a la brevedad.

Saludos atte.
Airblock Bahia Blanca

--------
E-mail: info@airblockbahiablanca.com.ar
Url: www.airblockbahiablanca.com.ar
Distribuidor oficial en la ciudad, zona de influencia y Sur del país.";

if ($envia == true){
$envia2 = mail(utf8_decode($email),utf8_decode("".$asunto.""),utf8_decode($cuerpo),utf8_decode("From: airblockbahiablanca@gmail.com"));
} else {
	echo "Error, intente nuevamente";
	}
	
if ($envia2 == true){
	header ('location: ../contacto.php?envio=si');}
	{echo "Error, intente nuevamente";}

?>