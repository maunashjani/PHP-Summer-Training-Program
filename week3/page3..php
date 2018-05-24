<?php

$toEmail ="";
$subject = "Demo Email";
$message = "This is a demo mail from PHP";

if(mail($toEmail, $subject, $message))
{
    echo "sent";
}
else
{
    echo "error";
}

?>