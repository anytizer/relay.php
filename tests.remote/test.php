<?php
/**
 * Copy this file where your vendor/ is.
 */
require_once "vendor/autoload.php";
#require_once "vendor/anytizer/relay.php/src/libraries/classes/anytizer/connections/relay.php";

#$classes = get_declared_classes();
#print_r($classes);
#die();


/**
 * Feature from includer.php to locate relay class.
 */
use anytizer\includer;
#$path = dirname(__FILE__)."/src/libraries/classes";
$path = "vendor/anytizer/relay.php/src/libraries/classes/anytizer/connections/";
spl_autoload_register(array(new includer($path), "namespaced_inc_dot"));
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
die("Relay connected");
$result = $relay->fetch($url);
$data = json_decode($result, true);

/**
 * Output the data fetched
 */
print_r($data);
