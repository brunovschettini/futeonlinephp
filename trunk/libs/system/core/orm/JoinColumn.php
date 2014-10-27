<?php

abstract class JoinColumn {

    private static $replace = array(
        "/",
        "*",
        "@JoinColumn",
        "(",
        ")",
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
            //log($e);
        }
        return null;
    }

    public static function isJoin($class = null, $var = null) {
        try {
            $reflection = new ReflectionClass(get_class($class));
            $joinColumnx = trim(str_replace(self::$replace, "", rtrim(trim($reflection->getProperty($var)->getDocComment()))));
            $joinColumn = json_decode(str_replace("'", '"', $joinColumnx));
            if (!empty($joinColumn->referencedColumnName)) {
                return true;
            }
        } catch (ReflectionException $e) {
            log($e);
        }
        return false;
    }

    public static function foreignKeys($class = null) {
        try {
            $em = new DB();
            $exe = $em->prepare("SHOW INDEXES FROM " . Table::name($class) . " WHERE KEY_NAME != 'PRIMARY'");
            if ($exe->execute() && $exe->rowCount() > 0) {
                return $exe->fetchAll();
            }
        } catch (PDOException $e) {
            //log($e);
        }
        return array();
    }

    public static function exist($joinColumn) {
        return $joinColumn;
    }

}
