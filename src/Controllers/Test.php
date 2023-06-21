<?php

declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Controllers;

/**
* @property int $test
*/
class Test
{
    private int $test;

    public function __construct(int $test)
    {
        $this->test=$test;
    }

    public function show(): void
    {

        $view_params=[];
        $view_params['id']=$this->test;
        $view_params['request']=$_REQUEST;
        require_once(BASE_DIR.'/src/Views/test/show.php');
    }


}
