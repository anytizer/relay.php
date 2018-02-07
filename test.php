<?php
/**
 * Copy this file where your vendor/ is.
 */
require_once "vendor/autoload.php";
use anytizer\includer;

/**
 * Feature from includer.php to locate relay class.
 */
$path = dirname(__FILE__)."/src/libraries/classes";
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
$result = $relay->fetch($url);
$data = json_decode($result, true);

/**
 * Output the data fetched
 */
print_r($data);
