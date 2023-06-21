<?php

declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Controllers;

use Dadeit1987\EserciziPhp\Services\Render;

/**
* @property string $test
*/
class Test
{
    private string $test;


    public function index(): void
    {

        $view_params=[];
        $view_params['test01']='valore01';
        $view_params['test02']='valore02';
        $view_params['test03']='valore03';
        Render::view('test/index', $view_params);
    }

    public function show(string $test): void
    {

        $view_params=[];
        $view_params['id']=$test;
        $view_params['request']=join(',', $_REQUEST);
        $view_params['custom']='what you want';

        Render::view('test/show', $view_params);
    }


}
