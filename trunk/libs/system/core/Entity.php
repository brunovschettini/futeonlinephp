<?php

/**
 * SweetPHP <br />
 * <p><b>Entity</b></p>
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class Entity extends DB {

    public function __construct() {
        parent::__construct();
    }

    public static function getTableName($class = null) {
        if (is_object($class)) {
            $reflection = new ReflectionClass(get_class($class));
        } else {
            $reflection = new ReflectionClass($class);
        }
        $table = trim(str_replace(array("/", "*", "@Entity", "@Table", "(", ")", "name", "\"", "="), "", rtrim(trim($reflection->getDocComment()))));
        return self::tableExist($table);
    }

    public static function tableExist($table) {
        $db = new DB();
        try {
            $exe = $db->prepare("SHOW TABLES LIKE ? ");
            if ($exe->execute(array($table))) {
                if ($exe->rowCount() > 0) {
                    return $table;
                }
            }
        } catch (PDOException $e) {
            return false;
        }
        return false;
    }

}
