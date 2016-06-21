<?php
try {
    $port = htmlspecialchars($_GET["port"]);
	$baud = htmlspecialchars($_GET["baud"]);
	$redto = htmlspecialchars($_GET["redto"]);
	$data = htmlspecialchars($_GET["data"]);
	exec("C:/Site/send_serial.exe " . $port . " " . $baud . " " . '"' .$data . '"');
	header('Location: ' . $redto . "?ok=yes");
} catch (Exception $e) {
    header('Location: ' . $redto . "?ok=yes");
}
?>