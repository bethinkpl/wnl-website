<?php

	$firstname = $_POST['firstname'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];

	if (!(empty($firstname) or empty($mail) or empty($message))) {
		$messages = "
			<p>Imię: $firstname</p>
			<p>E-mail: $mail</p>
			<p>Treść wiadomość: $message</p>
		";
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$header .= 'From: <hello@patrykbradtke.pl>' . "\r\n";
		@mail("hello@patrykbradtke.pl","Wiadomość ze strony Więcej niż lek","$messages","$header", "-f hello@patrykbradtke.pl") or die('error');

		echo 'success';
	}
	else {
	    echo 'error';
	}

?>