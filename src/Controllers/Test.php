<?php

declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Controllers;

use Dadeit1987\EserciziPhp\Services\Render;

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
        $view_params['request']=join(',', $_REQUEST);
        $view_params['custom']='what you want';

        Render::view('test/show', $view_params);
    }


}
