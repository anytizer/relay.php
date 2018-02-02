<?php
/**
 * Copy this file where your vendor/ is.
 */
require_once("vendor/autoload.php");
use anytizer\includer;

spl_autoload_register(array(new includer("src/libraries/classes"), "namespaced_inc_dot"));
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
