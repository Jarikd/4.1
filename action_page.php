<?php



$emailsSubject = 'Форма обратной связи клиента PROJECT HOME';
$webMaster  = 'jarik.drevetnjak@gmail.com';


/* Gathering Data Variables - Whats in the form */

$name = $_POST ['name'];
$tel = $_POST ['tel'];
$email = $_POST ['email'];
$shop = $_POST ['shop'];
$city = $_POST ['city'];
$subject = $_POST ['subject'];








    
$body = <<<EOD

<strong>Client:</strong> $name
<br />
<br />
<strong>Tel:</strong> $tel
<br />
<br />
<strong>Email:</strong> $email
<br />
<br />
<strong>Shop:</strong> $shop
<br />
<br />
<strong>City:</strong> $city
<br />
<br />

______________________________________________
<br />
<br />
$subject

EOD;



$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";


$success = mail($webMaster, $emailsSubject, $body, $headers);

/* Results Rendered as Html */
echo file_get_contents("http://portfolio.netxi.in/");

?>