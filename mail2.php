<?php

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

$to      = '<ertest01@yahoo.fr>; <ejallier@cefim.eu>';
$subject = 'Un nouveau pack pour vous !';
$message = 'Coucou les coquins';
$headers = "From: \"SSW\"<contact@ssw.com>\n";
$headers .= "Reply-To: contact@ssw.com\n";
$headers .= "Content-Type: text/html; charset=\"utf-8\"";

mail($to, $subject, $message, $headers);

