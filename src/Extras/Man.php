<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Extras;

require '/var/www/esercizi_php/vendor/autoload.php';

/**
 * @property string $first_name
 * @property string $last_name
 * @property ?int $age
 * @property int $number
 * @property int $built_number
 */
class Man
{
    //si vede dappertutto
    public string $first_name;
    //non si vede fuori dalla classe
    private string $last_name;
    //si vede nelle classi che estendono questa
    protected int $age = 18;
    public int $number = 0;

    public int $built_number;


    //va istanziata per costruirla quindi
    //$oggetto=new Exercise002('first_name')
    public function __construct(string $first_name, string $last_name, ?int $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->built_number = 1;
    }

    //accessor se fosse Laravel
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    //accessor se fosse Laravel
    public function getLastName(): string
    {
        return $this->last_name;
    }

    //mutator se fosse Laravel
    public function setAge(int $age)
    {
        $this->age=$age;
    }

    //Significa che puoi chiamarla senza istanziarla facendo ad esempio
    //echo Esercizio002::staticTest();
    public static function staticTest(): bool
    {
        return true;
    }

    public function isAdultIfCondition()
    {
        // questa sintassi è migliore di if else
        if($this->age > 18) {
            return true;
        }

        return false;
    }


}
