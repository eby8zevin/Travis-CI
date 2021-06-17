<?php

namespace Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
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