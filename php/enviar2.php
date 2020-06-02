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
//Ubicación proyecto ciudad
$domproc =  $_POST["dom_pro_ciudad"];
$domproc = stripslashes($domproc); 
//Ubicación proyecto prov
$domprop =  $_POST["dom_pro_prov"];
$domprop = stripslashes($domprop);
if ($domprop  == "C.A. Buenos Aires"){
	$domproc = "C.A. Buenos Aires";
	$domproc = stripslashes($domproc);
	$domprop  = "-.";
	} 
//Destino
if ($_POST["area_pro"] == "1")
{
	$area_pro = $_POST["area_pro_otro"];
	$area_pro = stripslashes($area_pro);
} 
else 
{
	$area_pro = $_POST["area_pro"];
	$area_pro = stripslashes($area_pro);
}
//Área de construcción
$area_cons = $_POST["area_cons"];
$area_cons = stripslashes($area_cons);
//PRO.CRE.AR
$procrear = $_POST["procrear"];
$procrear = stripslashes($procrear);
//Materiales a usar
$material = $_POST["material"];
$material = stripslashes($material);
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
	♦ Domicilio comercial: 
		-Provincia: ".$domcomp."
		-Ciudad: ".$domcomc."

Detalles del proyecto:
	♦ Ubicación: 
		-Provincia: ".$domprop."
		-Ciudad: ".$domproc."
	♦ Destino: ".$area_pro."
	♦ Tipo de obra: ".$area_cons."
	♦ Financiamiento: ".$procrear."
	♦ Observaciones o mensaje: 
		-".$msj;
					
$envia = mail($mail,"".$asunto."",$cuerpo,"From: ".$email."");

$mail = $email;
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
$envia2 = mail($mail,"".$asunto."",$cuerpo,"From: airblockbahiablanca@gmail.com");
} else {
	echo "Error, intente nuevamente";
	}
	
if ($envia2 == true){
	header ('location: ../contacto.php?envio=si');}
	{echo "Error, intente nuevamente";}

?>