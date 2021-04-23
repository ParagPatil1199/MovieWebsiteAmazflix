<?php
$to = "paragpatil91199@gmail.com";
$subject = "response from website";
$message = "I am tony";
$headers = "From: bleedingedge@amazflix.xyz";

if (mail($to, $subject, $message, $headers)){
    echo "Mail Sucess";
}
    else{
        echo "Can not send";
    }

?>