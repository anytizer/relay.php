# relay.php

Simple cURL based HTTP Client that relays GET/POST data.


## Usage

	$_GET = array();
	$_POST = array();
	
	$relay = new relay();
	$result = $relay->fetch($url);


## Installation

	composer require anytizer/includer.php:dev-master
	composer require anytizer/relay.php:dev-master


## Third party

 * Includes access to [ipify](https://www.ipify.org) for test purpose. [Project](https://github.com/rdegges/ipify-api)
