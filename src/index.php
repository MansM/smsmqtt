<?php
require("phpMQTT.php");

$sender = $_GET['sender'];
$topic = $_GET['topic'];
$message = $_GET['payload'];

$mqtt = new phpMQTT("10.0.1.52", 1883, $sender); //Change client name to something unique
if ($mqtt->connect()) {
	$mqtt->publish($topic, $message,0);
	$mqtt->close();
}
?>
