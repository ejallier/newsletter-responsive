<?php

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

$to      = 'ertest01@yahoo.fr, ejallier@cefim.eu, erwann.jallier@gmail.com, erwann.jallier@live.fr';
$subject = 'Un nouveau pack pour vous !';
$message = get_include_contents('index.html');
$headers = "From: \"SSW\"<ssw@erwannjallier.com>\n";
$headers .= "Reply-To: ssw@erwannjallier.com\n";
$headers .= "Content-Type: text/html; charset=\"utf-8\"";


mail($to, $subject, $message, $headers);

