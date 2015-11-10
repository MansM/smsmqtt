<?php
require("phpMQTT.php");

$broker = $_GET['broker'];
$sender = $_GET['sender'];
$topic = $_GET['topic'];
$message = $_GET['payload'];

$mqtt = new phpMQTT($broker, 1883, $sender); //Change client name to something unique
if ($mqtt->connect()) {
	$mqtt->publish($topic, $message,0);
	$mqtt->close();
}
?>
