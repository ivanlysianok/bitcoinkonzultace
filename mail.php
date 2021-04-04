<?php 

$name = $_POST['form-name'];
$lastname = $_POST['form-lastname'];
$contacts = $_POST['form-contact'];

$email_from = "bitcoinkonzultace@gmail.com";

$email_subject = "Nová zpráva z www.bitcoinkonzultace.cz";

$email_body = "Jméno: $name.\n".
"Příjmení: $lastname.\n".
"Kontakt na zákazníka: $contacts.\n".


$to = "ivanlysianok@gmail.com";

$headers = "From: $email_from \r\n"; 

$headers .= "Reply to: $to \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: https://www.bitcoinkonzultace.cz/thankyou.html");

?>