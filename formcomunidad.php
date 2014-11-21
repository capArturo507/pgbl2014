<?php
require 'src/login/usuario.php';
session_name('Global');
session_id('pgbl');
session_start();
?>
<!DOCTYPE html>
<html 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Crear Nueva Comunidad </title>
<link rel="stylesheet" type="text/css" href="css/forms.css" media="all">
<link rel="stylesheet" type="text/css" href="css/header.css" media="all">
<link rel="stylesheet" type="text/css" href="css/logistic_menu/default.css" />
<!--<script type="text/javascript" src="../js/viewformcomunidad.js"></script>-->
</head>
<body id="main_body" >
	<?php
        require 'header.php';
        ?>
	<div id="form_container">
		<form id="form_928984" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h1>Formulario de Comunidad</h1>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nombre </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Nombre de la Comunidad</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Provincia </label>
		<div>
		<select class="element select medium" id="element_3" name="element_3"> 
			<option value="" selected="selected"></option>
<option value="1" >Panamá Oeste</option>
<option value="2" >Panama Este</option>
<option value="3" >Darien</option>

		</select>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Población </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Total de habitantes en la comunidad</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Programas </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_1">Ambiente</label>
<input id="element_4_2" name="element_4_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_2">Derechos Humanos</label>
<input id="element_4_3" name="element_4_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_3">Medico Dental</label>
<input id="element_4_4" name="element_4_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_4">Microfinanzas</label>
<input id="element_4_5" name="element_4_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_5">Negocios</label>
<input id="element_4_6" name="element_4_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_6">Salud Pública</label>
<input id="element_4_7" name="element_4_7" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_4_7">Profesional</label>

		</span><p class="guidelines" id="guide_4"><small>Programas activos en la comunidad</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="928984" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	</body>
</html>