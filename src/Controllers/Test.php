<?php

declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Controllers;

use Dadeit1987\EserciziPhp\Services\Orm;
use Dadeit1987\EserciziPhp\Services\Render;

/**
* @property string $test
*/
class Test
{
    public function index(): void
    {
        $orm=new Orm();
        $view_params=$orm->select('test')/*->where([['stringa','=','stringa2'], ['stringa','!=','zero']])*/->get();

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
