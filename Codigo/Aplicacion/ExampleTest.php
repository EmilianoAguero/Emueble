<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSum()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}