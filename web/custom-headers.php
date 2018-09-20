<?php
#print_r($_SERVER);

$success = array_key_exists("HTTP_X_PROTECTION_TOKEN", $_SERVER);
echo json_encode(array(
	"success" => $success
));
