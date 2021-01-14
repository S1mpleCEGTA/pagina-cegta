<?php
		//este es el correo al que llegarán los mails
		$destino= "hideonbush1599@gmail.com";



		//$Nombre de la variable = $_POST["nombre de la variable en el formulario"]
		$name = $_POST["name"];
		$mailr = $_POST["email"];
		$phone = $_POST["phone"];
		$service = $_POST["message"];
		$contenido = "Enviado desde la web de CEGTA" . "\n" . "Cliente: " . $name .  "\n" . "WhatsApp: " . $phone .  "\n"  . "Correo: " . $mailr .  "\n" .  "\n" . "Mensaje: " . $service .  "\n";
		
		
		
		mail($destino,"NUEVA COTIZACIÓN",$contenido);

		
		header("Location:index.html");
?>