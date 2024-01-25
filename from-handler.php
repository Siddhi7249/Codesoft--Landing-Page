<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message=$_POST['message'];

$email_from ='siddhi.sutar.it.2021@vpkbiet.org';

$email_subject='New Form Submission';

$email_body ="user Name:$name.\n".
             "user Email:$visitor_email.\n". 
             "subject : $subject.\n". 
             "user Message : $visitor_email.\n";


$to ='siddhisutar2003@gmail.com';

$headers ="from: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$emai_subject,$email_body,$headers);

header("Location:contact.html");
?>
