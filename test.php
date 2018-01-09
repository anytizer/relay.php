<?php
/**
 * Copy this file where your vendor/ is.
 */
require_once("vendor/autoload.php");
use anytizer\includer;

if(is_dir("vendor/anytizer/relay.php"))
{
	# When migrated to a test site
	spl_autoload_register(array(new includer("vendor/anytizer/relay.php/src/libraries/classes"), "namespaced_inc_dot"));
}
else
{
	# From within this application
	spl_autoload_register(array(new includer("src/libraries/classes"), "namespaced_inc_dot"));
}

use anytizer\connections\relay;

$_GET = array(
	"format" => "json",
);

$_POST = array();

/**
 * Courtesy
 */
$url = "https://api.ipify.org/";

$relay = new relay();
$result = $relay->fetch($url);
$data = json_decode($result, true);

print_r($data);
