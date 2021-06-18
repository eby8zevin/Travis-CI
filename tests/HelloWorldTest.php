<?php

namespace Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\HelloWorld
 */
class HelloWorldTest extends TestCase
{
    /**
     * @covers \App\HelloWorld
     */
    public function testHelloWorld()
    {
        // arrange
        $target = new HelloWorld();
        $excepted = 'Hello, World!';

        // act
        $actual = $target->test();

        // assert
        $this->assertEquals($excepted, $actual);
    }

}