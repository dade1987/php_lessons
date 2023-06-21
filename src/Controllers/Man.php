<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Controllers;

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

        //print "Constructing " . __CLASS__ . "\n";
    }

    public function __destruct()
    {
        //print "Destroying " . __CLASS__ . "\n";
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
    public function setAge(int $age): void
    {
        $this->age=$age;
    }

    //Significa che puoi chiamarla senza istanziarla facendo ad esempio
    //echo Esercizio002::staticTest();
    public static function staticTest(): bool
    {
        return true;
    }

    public function isAdultIfCondition(): bool
    {
        // questa sintassi è migliore di if else
        if($this->age >= 18) {
            return true;
        }

        return false;
    }

    public function isAdultTernaryCondition(): bool
    {
        // questa sintassi è migliore di if else
        return $this->age >= 18 ? true : false;
    }

    public function senioritySwitch(): string
    {

        switch (true) {
            case $this->age <= 3:
                $seniority = 'newborn';
                break;

            case $this->age <= 5:
                $seniority = 'kindergarten';
                break;

            case $this->age <= 10:
                $seniority = 'elementary';
                break;

            case $this->age <= 13:
                $seniority = 'middle';
                break;

            case $this->age <= 18:
                $seniority = 'high';
                break;

            case $this->age <= 35:
                $seniority = 'adult';
                break;

            case  $this->age <= 60:
                $seniority = 'elderly';
                break;

            case  $this->age <= 85:
                $seniority = 'old';
                break;

            default:
                $seniority = 'decrepit';
                break;
        }

        return $seniority;
    }

    /**
     * @return array<int, int>
     */
    public function forCycle()
    {
        $array = [];

        for($i=1;$i<=$this->age;$i++) {
            $array[]=$i;
        }

        return $array;
    }

    /**
         * @return array<int, int>
         */
    public function whileCycle()
    {
        $array = [];
        $i=1;

        while($i<=$this->age) {
            $array[]=$i;

            $i++;
        }

        return $array;
    }

    /**
     * @param array<mixed, mixed> $items
     * @return array<mixed, mixed>
     */
    public static function foreachCycle($items)
    {

        $array=[];

        foreach($items as $index=>$value) {
            $array[$index]=$value;
        }

        return $array;
    }


}
