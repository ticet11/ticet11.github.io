<?php  
		$sender = $_POST['sender'];
		$subject = $_POST['subject'];
		$senderEmail = $_POST['senderEmail'];
		$message = $_POST['message'];

		$email_from = "pancakecircle@sagekozub.com";

		$email_subject = "$subject";

		$email_body = "SageKozub.com contact form message from: $sender,"." at $senderEmail.\n\n"."Message:\n$message";

		$to = "pancakecircle@gmail.com";

		$headers = "From: $email_from \r\n";

		$headers .= "Reply-To: $senderEmail \r\n";

		mail($to,$email_subject,$email_body,$headers);

		header("Location: contact.php?messageSent")
//}
?>