<?php 
	if (isset($_POST['submit'])) {
		$userName = $_POST['name'];
		$userEmail = $_POST['email'];
		$userPhone = $_POST['tel'];
		$message = $_POST['text-field'];

		$to = "ya.maestro25@yandex.ru";
		$subject = "Письмо с сайта";
		$headers = "От: ".$userName.": ".$userEmail.", ".$userPhone; 


		mail($to, $subject, $headers, $message);
		header("Location: index.html?mailsend");

	}
 ?>