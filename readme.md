# relay.php

Simple cURL based HTTP Client that relays GET/POST data.


## Usage

	$_GET = array();
	$_POST = array();
	
	$relay = new relay();
	$result = $relay->fetch($url);


## Installation

	composer require anytizer/relay.php:dev-master
