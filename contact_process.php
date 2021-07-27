<?php
    $to = "balazs.mate2002@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $cmessage = $_POST['message'];

    $headers = "Tőle: $from";
	$headers = "Tőle: " . $from . "\r\n";
	$headers .= "Válasz neki: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Üzenetet kaptál a Balázs Gumi Kft. oldalának egy látogatójától.";

    $logo = 'img/logo/fologo.png';
    //$link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Név:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>E-mail:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Tárgy:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	echo ini_get('display_errors');

    $send = mail($to, $subject, $body);

?>