# relay.php

Simple cURL based HTTP Client that __relays__ GET/POST data.


## Usage

    <?php
    use anytizer\relay;

    $_GET = array();
    $_POST = array();

    $relay = new relay();
    $result = $relay->fetch($url);


## Installation

    composer global require anytizer/relay.php:dev-master
    composer require anytizer/relay.php:dev-master


## Third party

 * Includes access to [ipify](https://www.ipify.org/) ([project](https://github.com/rdegges/ipify-api/)) for test purpose.
