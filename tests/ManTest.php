<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Dadeit1987\EserciziPhp\Controllers\Man;

final class ManTest extends TestCase
{
    public function testFirstNameProperty(): void
    {
        $man_object=new Man('Davide', 'Cavallini', 25);

        $this->assertEquals('Davide', $man_object->first_name);

        $this->assertNotEquals('Luigi', $man_object->first_name);
    }

    public function testAge(): void
    {

        $man_object=new Man('Davide', 'Cavallini', 25);

        $man_object->setAge(18);

        $this->assertEquals(true, $man_object->isAdultIfCondition());

        $this->assertNotEquals(false, $man_object->isAdultIfCondition());

        $this->assertEquals(true, $man_object->isAdultTernaryCondition());

        $this->assertNotEquals(false, $man_object->isAdultTernaryCondition());
    }

    public function testSeniority(): void
    {
        $man_object=new Man('Davide', 'Cavallini', 25);

        $this->assertNotEquals('high', $man_object->senioritySwitch());

        $this->assertEquals('adult', $man_object->senioritySwitch());

    }

    public function testCycles(): void
    {
        $man_object=new Man('Davide', 'Cavallini', 5);

        $this->assertEquals(5, count($man_object->forCycle()));

        $this->assertNotEquals(4, count($man_object->forCycle()));

        $this->assertNotEquals(6, count($man_object->forCycle()));

    }
}
