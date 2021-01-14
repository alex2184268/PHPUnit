<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

/**
 * CalculatorTest
 * @group calculator
 * 
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function testAdd()
    {
        // arrange
        $target = new Calculator();
        $expected = 2;  
        
        //act
        $actual = $target->add(1,1);

        //assert
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function testSub()
    {
        // arrange
        $target = new Calculator();
        $expected = 4;

        //act
        $actual = $target->sub(2,2);

        //assert
        $this->assertEquals($expected, $actual);
    }
    

}
