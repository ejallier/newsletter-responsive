<?php

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

$to      = 'ertest01@yahoo.fr; ejallier@cefim.eu';
$subject = 'Un nouveau pack pour vous !';
$message = get_include_contents('index.html');
$headers = "From: \"SSW\"<contact@ssw.com>\n";
$headers .= "Reply-To: contact@ssw.com\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

mail($to, $subject, $message, $headers);

