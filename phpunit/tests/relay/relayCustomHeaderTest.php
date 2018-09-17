<?php
use PHPUnit\Framework\TestCase;
use anytizer\relay;

/**
 * Relay a custom header
 */
class relayCustomHeaderTest extends TestCase
{
	public function setup()
	{
		$_GET = array();
		$_POST = array();
	}
	
	public function testIpAddressFromIpify()
	{
		$_GET = array(
			"format" => "json",
		);
		
		/**
		 * Courtesy use
		 * @see https://www.ipify.org/
		 */
		$url = "https://api.ipify.org/";
		
		$relay = new relay();
		$relay->headers(array(
			"X-Protection-Token" => "",
		));
		$result = $relay->fetch($url);

		$data = json_decode($result, true);
		$ip = $data["ip"];
		
		$this->assertArrayHasKey("ip", $data);
		
		$ipv4 = "0.0.0.0"; // compose with single digit
		$ipv6 = "0000:0000:0000:0000:0000:0000:0000:0000"; // compose with 4 digits
		
		$this->assertTrue(strlen($ip) >= strlen($ipv4));
		$this->assertTrue(strlen($ip) <= strlen($ipv6));
	}
}