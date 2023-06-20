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

        $this->assertEquals(true, $man_object->isAdultIfCondition());

        $man_object->setAge(15);

        $this->assertNotEquals(true, $man_object->isAdultIfCondition());

    }
}
