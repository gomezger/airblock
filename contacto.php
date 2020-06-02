<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacto | Airblock Bahía Blanca</title>
<!-- Hoja de estilos -->
<link rel="stylesheet" href="estilos/contacto.css" media="all" />
<link rel="stylesheet" href="estilos/global.css" media="all" />
<link type="image/x-icon" href="activos/icono.png" rel="shortcut icon" />
<script type="text/javascript" src="js/validation.js"></script>
</head>

<body>
<?php include('php/header.php'); ?>
<?php include('php/menu.php'); ?>
<div id="content">
  <div id="encabezado">
      <h2 class="titulo">CONTACTO</h2>
      <h3 class="sub-titulo">Local de Atención al cliente: Soler 558, Bahía Blanca.</h3>    
      </div>
    <div id="section">
    <div class="encabezado"><p><h1 class="h1"><strong>Airblock Bahía Blanca </strong> - Distribuidor oficial en la ciudad, zona de influencia y Sur del país. </h1> 
    Para recibir información sobre ladrillos Airblock o paneles térmicos Complete el formulario adjunto y le responderemos a la brevedad.</p></div>
      <div class="formulario">
      	<div class="contenedor">
        	<?php if (@$_REQUEST['envio'] == "si"){ 
					echo '<div id="envio">Su consulta fue enviada exitosamente.</div>';
				} else { echo '
				<form action="php/enviar.php" method="post" onSubmit="return validacion();">
            	<legend class="titulo">Detalles del contacto</legend><hr class="hr">
              		<div class="opcion">Nombre y Apellido / Razón social
                    <input name="name" id="campo-name" tabindex="1" placeholder="Ingrese su nombre o razón social" type="text" ></div>
              		<div class="opcion">E-mail personal / empresa
                    <input name="email" id="campo" tabindex="2"placeholder="Ingrese su e-mail" type="email"></div>	
                	<div class="opcion">Teléfono personal / empresa 
                  	<input name="tel" id="campo-tel" placeholder="Ingrese número de teléfono" tabindex="4" type="text" maxlength="11">
                    <input name="carac" id="campo-carac" placeholder="Caracteristica" tabindex="3" type="text" maxlength="5"></div>	
           	 		<div class="opcion">Localidad
                    <input name="dom_com_ciudad"  tabindex="6" placeholder="Ingrese su ciudad" type="text" id="campo-ciudad">
                    <select id="campo-prov" tabindex="5" name="dom_com_prov" >
                      <option value="0">Seleccione Provincia</option>
                      <option value="C.A. Buenos Aires">C.A. Buenos Aires</option>
                      <option value="Buenos Aires">Buenos Aires</option>
                      <option value="Catamarca">Catamarca</option>
                      <option value="Chaco">Chaco</option>
                      <option value="Chubut">Chubut</option>
                      <option value="Córdoba">Córdoba</option>
                      <option value="Corrientes">Corrientes</option>
                      <option value="Entre Ríos">Entre Ríos</option>
                      <option value="Formosa">Formosa</option>
                      <option value="Jujuy">Jujuy</option>
                      <option value="La Pampa">La Pampa</option>
                      <option value="La Rioja">La Rioja</option>
                      <option value="Mendoza">Mendoza</option>
                      <option value="Misiones">Misiones</option>
                      <option value="Neuquén">Neuquén</option>
                      <option value="Río Negro">Río Negro</option>
                      <option value="Salta">Salta</option>
                      <option value="San Juan">San Juan</option>
                      <option value="San Luis">San Luis</option>
                      <option value="Santa Cruz">Santa Cruz</option>
                      <option value="Santa Fe">Santa Fe</option>
                      <option value="Santiago del Estero">Santiago del Estero</option>
                      <option value="Tierra del Fuego">Tierra del Fuego</option>
                      <option value="Tucumán">Tucumán</option>
              </select></div>
          		     		<div class="opcion">Consulta
                    <textarea name="msj" placeholder="Ingrese mensaje" id="msj"></textarea></div><br>   
        			<input class="borrar" type="reset" tabindex="15" value="Borrar datos">
                    <input class="enviar" type="submit" tabindex="16" value="Enviar consulta"><br><br>
         	</form>';
				} ?>
		</div>
      </div>
      <div id="nav">
   		<p id="privacidad">Su privacidad es importante para nosotros. Toda información que usted proporcione será estrictamente confidencial y no será compartida con otros en cualquier caso. Será utilizada únicamente para la confección de su presupuesto o responder sus inquietudes.</p>
        <div id="datos">
        	Datos de contacto:
            <ul>
            	<li class="local">Airblock - Hormigón celular</li>
                <li class="direc">Soler 558 - Bahía Blanca, Argentina</li>
 				<li class="tel">Tel.: (0291) 4307575</li>   
                <li class="email">Mail:  <a class="mail" href="mailto: info@airblockbahiablanca.com.ar">info@airblockbahiablanca.com.ar</a></li>
            </ul>
            
        </div></div>
    </div>
  </div>
<?php include('php/footer.php'); ?>
</body>
</html>