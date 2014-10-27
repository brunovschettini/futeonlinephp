<?php

class Table {

    public static $replace = array(
        "/",
        "*",
        "@Entity",
        "@Table",
        "(", ")",
        "name",
        "\"",
        "="
    );
    public static $settings = array(
        'primaryKey' => false,
        'strategy' => '', // AUTO_INCREMENT
        'name' => '',
        'nullable' => 'false',
        'length' => 0,
        'type' => 'VARCHAR',
        'unique' => false,
        'columnDefinition' => 'null'
    );
    private $unique = false;
    private $strategy = '';
    private $name = '';
    private $nullable = '';
    private $length = 0;
    private $type = 0;
    private $columnDefinition = false;

    private function __construct() {
        ;
    }

    public static function name($class = null) {
        try {
            if (is_object($class)) {
                $class = get_class($class);
            }
            $class = strtolower($class);
            $reflection = new ReflectionClass($class);
            $table = strtolower(trim(str_replace(self::$replace, "", rtrim(trim($reflection->getDocComment())))));
            return self::exist($table);
        } catch (ReflectionException $e) {
            //log($e);
        }
        return null;
    }

    public static function exist($table = "") {
        try {
            $ef = new DB();
            $table = strtolower(strtoupper($table));
            $exe = $ef->prepare("SHOW TABLES LIKE ? ");
            if (!$exe->execute(array($table))) {
                return false;
            }
            if ($exe->rowCount() > 0) {
                return $table;
            }
        } catch (PDOException $e) {
            //log($e);
            return false;
        }
        return false;
    }

    public static function createTable($class = null) {
        try {
            $tableName = strtolower(self::name($class));
            if (is_string($class)) {
                $ob = strtolower(strtoupper($class));
                $newOb = new $ob();
            }
            $value = null;
            if (!is_object($newOb)) {
                return false;
            }
            foreach ($ob as $key => $value) {
                $tableColumns[] = str_replace("'", '"', Column::name($newOb, $key));
            }
            return self::create($tableName, $tableColumns);
        } catch (Exception $e) {
            //log($e);
            return false;
        }
    }

    private static function create($tableName = "", $coluns = array()) {
        error_reporting(0);
        $pKey = false;
        $query = " CREATE TABLE IF NOT EXISTS $tableName ( ";
        $primary = "";
        for ($i = 0; $i < sizeof($coluns); $i++) {
            $ob = new Table();
            $ob = (object) array_merge(self::$settings, json_decode($coluns[$i], true));
            if ($ob->primaryKey == 'true') {
                if (!$pKey) {
                    $primary = " CONSTRAINT PRIMARY KEY($ob->name) ";
                    $pKey = true;
                    if ($ob->strategy == '' || $ob->strategy == 'AUTO_INCREMENT') {
                        $query .= " {$ob->name} {$ob->type}($ob->length) AUTO_INCREMENT ";
                    } else {
                        
                    }
                }
            } else {
                if ($i > 0) {
                    $query .= ", ";
                }
                $pKey = true;
                $nullable = "";
                if ($ob->nullable == 'false' || !$ob->nullable) {
                    $nullable = " NOT NULL ";
                }
                $unique = "";
                if ($ob->unique == 'true' || $ob->unique) {
                    $unique = " NOT NULL ";
                }
                if ($ob->type !== 'bool' || $ob->type !== 'boolean') {
                    $query .= "{$newOb->name} {$newOb->type}($newOb->length) $nullable ";
                } else {
                    $query .= "{$ob->name} {$ob->type} $nullable ";
                }
            }
        }
        $query = $query . $primary;
        global $config;
        $query = $query . " ) ENGINE=InnoDB DEFAULT CHARSET={$config['db']['charset']}; ";
    }

    public static function showKeys($table, $keyName, $key) {
        try {
            $em = new DB();
            $exe = $em->prepare("SHOW KEYS FROM " . self::name($table) . " WHERE KEY_NAME = '$keyName'");
            if (!$exe->execute()) {
                return null;
            }
            if ($exe->rowCount() > 0) {
                $resultSet = $exe->fetchObject();
                return $resultSet->$key;
            }
        } catch (PDOException $e) {
            //log($e);
            return null;
        }
        return null;
    }

    public static function primaryKey($table) {
        return self::showKeys(strtolower($table), "PRIMARY", "Column_name");
    }

}
