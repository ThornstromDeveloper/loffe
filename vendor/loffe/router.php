<?php
namespace Routing;

class Router {
    public static array $result = [];

    static function connect(string $request_uri, array $target): bool {
        if ($_SERVER['REQUEST_URI'] == $request_uri) {
            self::$result = [
                'controller' => $target['controller'],
                'method' => 'index',
            ];
        }
        return true;
    }

    static function get(): array {
        return self::$result;
    }
}
