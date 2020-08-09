<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
		$message=$_POST['message'];

		$to_email="narayankr09072000@gmail.com"; 
		$subject="Message from Portfolio";
		$email_body="Name :$name.\n".
 
"email :$email.\n".
"Subject :$subject.\n".
"message :$message.\n";
		$headers="From: $email.\r\n";
		mail($to_email, $subject, $email_body, $headers);
		header("Location: index.php?mailsend");
		
	}
?>
