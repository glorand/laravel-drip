<?php

namespace Glorand\Drip\Laravel\Tests;

use ReflectionClass;

class FacadeTest extends TestCase
{
    /** @test
     * @throws \ReflectionException
     */
    public function testIsAFacade()
    {
        $facade = new ReflectionClass('Illuminate\Support\Facades\Facade');
        $reflection = new ReflectionClass('Glorand\Drip\Laravel\DripFacade');
        $this->assertTrue($reflection->isSubclassOf($facade));
    }

    /**
     * @throws \ReflectionException
     */
    public function testIsAFacadeAccessor()
    {
        $reflection = new ReflectionClass('Glorand\Drip\Laravel\DripFacade');
        $method = $reflection->getMethod('getFacadeAccessor');
        $method->setAccessible(true);
        $this->assertEquals('drip', $method->invoke(null));
    }
}
