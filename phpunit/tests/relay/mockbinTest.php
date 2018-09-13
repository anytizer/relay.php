<?php
use PHPUnit\Framework\TestCase;
use anytizer\relay;

/**
 * Service not functional
 */
class mockbinTest extends TestCase
{
	private $relay = null;

	public function setup()
	{
		$_GET = array();
		$_POST = array();
		$this->relay = new relay();
	}
	
	public function testMockBin()
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
		$guid = "DB450EE1-D282-47B0-8565-1131E48792E8";
		$url = "http://mockbin.org/bin/{$guid}/view";
		
		$relay = new relay($headers);
		$result = $relay->fetch($url);
		
		$this->markTestIncomplete();
	}
}