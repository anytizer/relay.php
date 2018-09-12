<?php
use PHPUnit\Framework\TestCase;
use anytizer\relay;

class mockbinTest extends TestCase
{
	private $relay = null;

	public function setup()
	{
		$_GET = array();
		$_POST = array();
		$this->relay = new relay();
	}
	
	public function _testMockbinTest()
	{
		$_GET = array(
			"format" => "json",
		);
		
		$_POST = array(
			"from" => "UnitTest",
		);
		
		$headers = array(
			"Accept" => "application/json"
		);
		
		/**
		 * Courtesy use
		 * Create an endpoint first
		 * @see http://mockbin.org
		 */
		$url = "http://mockbin.org/bin/A06CABA4-C11F-4EC2-91B5-5CF259D4968E/view";
		
		$relay = new relay($headers);
		$result = $relay->fetch($url);
	}
}