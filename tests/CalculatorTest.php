<?php 


/**
* 
*/
class CalculatorTest extends PHPUnit_Framework_TestCase
{
	
	public function testSumNumber()
	{
		$this->assertEquals(30,Calculator::Sum(5,25));
	}
	public function testSumNumber2()
	{
		$this->assertEquals(30,Calculator::Sum(5,25));
	}
}