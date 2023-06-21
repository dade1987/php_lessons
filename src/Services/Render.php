<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Services;

class Render
{
    /**
     * @param array<mixed,mixed> $view_params
     */
    public static function view(string $path, array $view_params): void
    {
        $view=BASE_DIR.'/src/Views/'.$path.'.php';
        require_once($view);
    }
}
