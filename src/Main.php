<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp;

use Dadeit1987\EserciziPhp\Controllers\Man;
use Dadeit1987\EserciziPhp\Controllers\Marine;

class Main
{
    public static function start(): void
    {

        var_dump($_ENV);

        var_dump(Man::staticTest());

        /**
         * @var Man $man_object
         */
        $man_object=new Man('Davide', 'Cavallini', 25);

        var_dump($man_object->first_name);

        //non accessibile perchè private
        //var_dump($man_object->last_name);

        //non accessibile se non estendo la classe perchè protected
        //var_dump($man_object->age);

        var_dump($man_object->getFirstName());

        var_dump($man_object->getLastName());

        /**
        * @var Marine $man_object
        */
        $marine_object=new Marine('Davide', 'Cavallini', 21, 15);

        var_dump($marine_object->getAge());

    }
}
