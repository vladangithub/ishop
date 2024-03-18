<?php

namespace wfm;

class Router
{

    protected static array $routes = [];
    protected static array $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;

    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        if (self::matchRoute($url))
        {
            echo 'OK';
        } else {
            echo 'No';
        }
    }

    public static function matchRoute($url) : bool
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {
                debug($matches);
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                debug($route);
                return true;
            }
        }
        return false;
    }

}






































