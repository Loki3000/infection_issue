<?php

use PHPUnit\Framework\TestCase;
use tad\FunctionMocker\FunctionMocker;

final class myClassTest extends TestCase
{
    protected function setUp(): void
    {
        FunctionMocker::setUp();
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        FunctionMocker::tearDown();
    }

    public function testCheckStatus(): void
    {
        FunctionMocker::replace('myFunc', 'test');
        $class=new myClass();
        $this->assertTrue($class->checkStatus());
    }
}