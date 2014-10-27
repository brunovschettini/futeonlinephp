<?php

class Column {

    private $replace = array(
        "/",
        "*",
        "@Column",
        "(", ")",
        "\"",
        "="
    );

    public static function name($class = null, $var = null) {
        try {
            if (is_object($class)) {
                $class = get_class($class);
            }
            if (!property_exists($class, property_exists($class, $var))) {
                return null;
            }
            $reflection = new ReflectionClass($class);
            $column = trim(str_replace($this->replace, "", rtrim(trim($reflection->getProperty($var)->getDocComment()))));
            return self::exist($column);
        } catch (ReflectionException $e) {
            log($e);
        }
        return null;
    }

    public static function exist($column) {
        return $column;
    }

}
