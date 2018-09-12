<?php
use PHPUnit\Framework\TestCase;
use anytizer\relay;

/**
 * Generate and Use tokens before actual API is being accessed
 */
class relayTest extends TestCase
{
	private $relay = null;

	public function setup()
	{
		$_GET = array();
		$_POST = array();
		$this->relay = new relay();
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
		$result = $relay->fetch($url);

		$data = json_decode($result, true);
		$ip = $data["ip"];
		
		$this->assertArrayHasKey("ip", $data);
		
		$ipv4 = "0.0.0.0";
		$ipv6 = "0000:0000:0000:0000:0000:0000:0000:0000";
		
		$this->assertTrue(strlen($ip) >= strlen($ipv4));
		$this->assertTrue(strlen($ip) <= strlen($ipv6));
	}
}