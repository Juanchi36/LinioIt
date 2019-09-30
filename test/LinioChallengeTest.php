<?php

namespace Challenge;

require_once './vendor/autoload.php';

use Challenge\LinioChallenge; 
use PHPUnit\Framework\TestCase;

final class LinioChallengeTest extends TestCase
{
	protected function setUp() :void
    {
		$this->challenge = new LinioChallenge();
		$this->challenge->play();
	}
	
	public function testIsAClass()
	{
		$this->assertTrue(class_exists("Challenge\LinioChallenge"));
	}

	public function testResultAttr()
	{	
		$this->assertClassHasAttribute('result', LinioChallenge::class);
	}

	public function testResultArray()
	{
		$this->assertIsArray($this->challenge->getResult());
		$this->assertCount(100, $this->challenge->getResult());
	}

	public function testPlayResult()
	{	
		$this->assertEquals($this->challenge->getResult()[0], 1);
		$this->assertEquals($this->challenge->getResult()[2], 'Linio');
		$this->assertEquals($this->challenge->getResult()[6], 7);
		$this->assertEquals($this->challenge->getResult()[54], 'IT');
		$this->assertEquals($this->challenge->getResult()[73], 74);
		$this->assertEquals($this->challenge->getResult()[89], 'Linianos');
		$this->assertEquals($this->challenge->getResult()[96], 97);
	}

	protected function tearDown() :void
    {
        $this->challenge = null;
    } 
}