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
        $view_params=[];
        $view_params['table']=$orm->select('test')->where([['stringa','LIKE','%stringa%'], ['stringa','!=','zero']])->get();
        $view_params['request']=$_GET;
        $view_params['sql']=$orm->getSql();
        $view_params['sql_params']=$orm->getSqlParams();

        Render::view('test/index', $view_params);
    }

    public function show(string $test): void
    {
        $view_params=[];

        $orm=new Orm();
        $view_params=$orm->select('test')->where([['id','=',$test]])->get();


        Render::view('test/show', $view_params);
    }


}
