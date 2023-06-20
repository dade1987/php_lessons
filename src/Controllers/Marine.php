<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Controllers;

require  '/var/www/esercizi_php/vendor/autoload.php';

use Dadeit1987\EserciziPhp\Extras\Exercise002;

/**
* @property int $max_pushups
*/
class Marine extends Man
{
    private int $max_pushups;

    public function __construct(string $first_name, string $last_name, ?int $age, int $max_pushups)
    {
        // costruisce la classe estesa
        parent::__construct($first_name, $last_name, $age);

        $this->max_pushups=$max_pushups;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getMaxPushups(): int
    {
        return $this->max_pushups;
    }

}
