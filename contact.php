<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
$email_body="Name :$name.\n".
 
"Email :$email.\n".
"Subject :$subject.\n".
"Message :$message.\n";

if (empty($name || empty($email) || empty($subject) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("narayankr09072000@gmail.com", "Message from Portfolio", $email_body);
    echo "<script type='text/javascript'>alert('your message sent successfully');
         window.history.log(-1);
         </script>";
}
?>
