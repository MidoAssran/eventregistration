<?php
require_once ('controller/Controller.php');

session_start();

$c = new Controller();
try {
	$c->createParticipant($_POST['participant_name']);
	
	// Clearing unrelated errors
	$_SESSION["errorRegisterEvent"] = "";
	$_SESSION["errorRegisterParticipant"] = "";
	$_SESSION["errorParticipantName"] = "";
	$_SESSION["errorEventName"] = "";	
} catch (Exception $e) {
       $_SESSION["errorParticipantName"] = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
       <head>
	<meta http-equiv="refresh" content="0; url=/EventRegistration/" />
	</head>
</html>