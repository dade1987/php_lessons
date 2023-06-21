<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Services;

class Router
{
    //devi passare route e controller
    public static function get(string $url, string $controller, string $method): void
    {
        self::registerRoutes($url, $controller, $method, $_GET);
    }

    public static function post(string $url, string $controller, string $method): void
    {
        self::registerRoutes($url, $controller, $method, $_POST);
    }

    /**
     * @param array<string,mixed> $request
     */
    public static function registerRoutes(string $url, string $controller, string $method, array $request): void
    {
        $request_uri = $_SERVER['REQUEST_URI'];

        $request_uri_parsed = str_replace($_ENV['CURRENT_FOLDER'], '', $request_uri);

        $request_uri_parsed = parse_url($request_uri_parsed, PHP_URL_PATH);

        $url_parsed = parse_url($url, PHP_URL_PATH);

        if (null == $url_parsed) {
            throw new \Exception('router url_parsed is null');
        }

        if (null == $request_uri_parsed) {
            throw new \Exception('router url_parsed is null');
        }

        preg_match_all('/\{([^{}]+)\}/', $url_parsed, $matches);

        $request_uri_parsed_exploded = explode('/', $request_uri_parsed);
        $url_parsed_exploded = explode('/', $url_parsed);

        if (count($request_uri_parsed_exploded) == count($url_parsed_exploded)) {

            $params = [];

            foreach ($url_parsed_exploded as $index => $value) {

                if (substr($value, 0, 1) == "{") {

                    if (is_numeric($request_uri_parsed_exploded[$index])) {

                        $params_index = substr($value, 1, -1);
                        $params[$params_index] = $request_uri_parsed_exploded[$index];
                    } else {
                        exit;
                    }
                }
            }

            //var_dump($request_uri_parsed_exploded, $url_parsed_exploded);

            $controller_object = new $controller();

            $controller_object->$method(...array_values($params));
        }
    }
}
