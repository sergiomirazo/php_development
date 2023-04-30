<?php
// email data
$destiny = "example@test.com";
$affair = "Affair of message";
$body = "<h1>Test Message</h1>
<p>This is a <b>Test message</b> for verify the functioning of the server.</p>";

// set headers
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

// Send Email
if(mail($destiny,$affair,$body,$headers)){
    echo "Mail sent successfully";
}else{
    echo "Error sending mail";
}
?>
