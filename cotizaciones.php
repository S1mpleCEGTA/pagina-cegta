<?php
		//este es el correo al que llegarán los mails
		$destino1 = "hideonbush1599@gmail.com";
		$destino2 = "nikolaymx@yahoo.com";


		//$Nombre de la variable = $_POST["nombre de la variable en el formulario"]
		$name = $_POST["name"]; //NOMBRE
		$mailr = $_POST["email"]; //CORREO
		$phone = $_POST["phone"]; //TELÉFONO 
		$enterprise = $_POST["enterprise"]; //NOMBRE DE LA EMPRESA
		
		$tramit = $_POST["servicio"]; //SERVICIOS QUE SOLICITA
		$state = $_POST["state"]; //ESTADO DE LA RESPÚBLICA
		
		$munic = $_POST["place"]; //MUNICIPIO
		$activity = $_POST["activity"]; //ACTIVIDAD COMERCIAL
		$service = $_POST["message"]; //MENSAJE
		$contenido = "Enviado desde la web de CEGTA" . "\n" . "Cliente: " . $name . "\n" . "WhatsApp o teléfono: " . $phone .  "\n" . "Correo: " . $mailr . "\n" . "Empresa: " . $enterprise . "\n" . "Solicita cotización de: " . $tramit . "\n" . "Estado en el que se encuentra su empresa: " . $state . "\n" . "Municipio en el que se encuentra su empresa" . $munic . "\n" . "Giro comercial de su empresa: " . $activity . "\n" .  "\n" . "Mensaje: " . $service .  "\n";
		
		
		
		mail($destino1,"NUEVA COTIZACIÓN",$contenido);
		mail($destino2,"NUEVA COTIZACIÓN",$contenido);

		
		header("Location:index.html");
?>