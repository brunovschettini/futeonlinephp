<?php

/**
 * SweetPHP <br />
 * <p><b>EntityManager</b></p>
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class EntityManager extends DB {

    private $statement;
    private $fetch;

    public function __construct() {
        $this->statement = array(null, new PDOStatement());
        $this->fetch = null;
        parent::__construct();
    }

    /**
     * SweetPHP <br />
     * <p><b>EntityManager / persist</b></p>
     * @example  persist($user) Insere o objeto na tabela, os nomes dos campos da tabela devem corresponder aos mesmos nomes dados na declaração das variáveis no objeto. Não há necessidade de abrir transação se inserir somente um objeto.
     * @author sweetphp
     * @return boolean TRUE/FALSE
     */
    public function persist($object = null) {
        try {
            $pKey = Table::primaryKey($object);
            if ($object->$pKey == -1) {
                $object->$pKey = 0;
            }
            $array = (array) $object;
            $queryInsert = $this->queryPersist($array, $object);
            $exe = $this->prepare(" $queryInsert ");
            foreach ($array as $key => $value) {
                if (class_exists($key)) {
                    if (is_null($value)) {
                        $exe->bindValue(":$key", $value, self::pdoType($value));
                    } else {
                        $pKey = Table::primaryKey($value);
                        $exe->bindValue(":$key", $value->$pKey, self::pdoType($value->$pKey));
                    }
                } else {
                    $exe->bindValue(":$key", $value, self::pdoType($value));
                }
            }
            if (!$exe->execute()) {
                return false;
            }
            $object->$pKey = (int) $this->lastInsertId();
            return $object;
        } catch (PDOException $e) {
            log($e->getMessage());
            return false;
        }
    }

    /**
     * SweetPHP <br />
     * <p><b>EntityManager / updateObject</b></p>
     * @author sweetphp
     * @example  updateObject($user) Atualiza o objeto na tabela, os nomes dos campos da tabela devem corresponder aos mesmos nomes dados na declaração das variáveis no objeto. Não há necessidade de abrir transação se inserir somente um objeto. Não há necessidade de abrir transação.
     * @return boolean TRUE/FALSE
     */
    public function merge($object = null) {
        try {
            $array = (array) $object;
            $queryUpdate = $this->queryMerge($array, $object);
            $exe = $this->prepare(" $queryUpdate ");
            foreach ($array as $key => $value) {
                if (class_exists($key)) {
                    if (is_null($value)) {
                        $exe->bindValue(":$key", $value, self::pdoType($value));
                    } else {
                        $pKey = Table::primaryKey($value);
                        $exe->bindValue(":$key", $value->$pKey, self::pdoType($value->$pKey));
                    }
                } else {
                    $exe->bindValue(":$key", $value, self::pdoType($value));
                }
            }
            if ($exe->execute()) {
                return true;
            }
        } catch (PDOException $e) {
            log($e);
        }
        return false;
    }

    /**
     * SweetPHP <br />
     * <p><b>EntityManager / remove</b></p>
     * @author sweetphp
     * @example  remove($user) Deleta o objetos na tabela, os nomes dos campos da tabela devem corresponder aos mesmos nomes dados na declaração das variáveis no objeto. Não há necessidade de abrir transação se inserir somente um objeto. Não há necessidade de abrir transação.
     * @return boolean TRUE/FALSE
     */
    public function remove($object = null) {
        try {
            if ($this->query($this->queryDelete($object))) {
                return true;
            }
        } catch (PDOException $e) {
            log($e->Message());
        }
        return false;
    }

    public function find($class = null, $value = null) {
        $table = Table::name($class);
        if ($table == "" && $table == false && !Table::exist($class)) {
            return null;
        }
        try {
            $param = -1;
            $pKey = Table::primaryKey($class);
            if ($value == null) {
                $param = $class->$pKey;
            } else {
                $param = $value;
            }
            $exe = $this->prepare("SELECT O.* FROM {$table} AS O WHERE O.$pKey = ? ");
            if (!$exe->execute(array($param)) && $exe->rowCount() == 0) {
                return null;
            }
            $resultSet = $exe->fetchObject();
            if (is_string($class)) {
                $class = strtolower(strtoupper($class));
                $class = new $class();
            }
            $object = $this->mergeToObject($class, (array) $resultSet);
            return $object;
        } catch (PDOException $e) {
            log($e->getMessage());
        }
        return null;
    }

    public function flush() {
        
    }

    //public function setFlushMode(FlushModeType fmt);

    public function getFlushMode() {
        return; //new FlushModeType();
    }

    //public function lock(Object o, LockModeType lmt);

    public function refresh($object = null) {
        $object = $object;
    }

    public function clear() {
        
    }

//    public boolean contains(Object o);

    public function createQuery($string = "") {
        $string = "";
    }

    public function createNamedQuery($string = "") {
        $string = "";
    }

    public function createNativeQuery($string = "", $typeString = null) {
        try {
            $typeString = "";
            $this->statement = $this->prepare($string);
            return array("createNativeQuery", $this->statement);
        } catch (Exception $e) {
            log($e);
        }
        return null;
    }

    public function joinTransaction() {
        
    }

    public function getDelegate() {
        
    }

    public function close() {
        
    }

    public function isOpen() {
        
    }

    public function getTransaction() {
        
    }

    protected function mergeToObject($object, $array) {
        foreach ($array as $key => $value) {
            if (Table::exist($key)) {
                $resultSet = $this->find($key, $value);
                $ob = strtolower(strtoupper($key));
                $retur = self::mergeToObject(new $ob(), (array) $resultSet);
                $object->$key = $retur;
            } else {
                $object->$key = $value;
            }
        }
        return $object;
    }

    /**
     * 
     * @ignore
     */
    private static function pdoType($var = null) {
        $type = gettype($var);
        if ($type == "string") {
            return PDO::PARAM_STR;
        } else if ($type == "int") {
            return PDO::PARAM_INT;
        } else if ($type == "bool") {
            return PDO::PARAM_BOOL;
        } else {
            return PDO::PARAM_NULL;
        }
    }

    /**
     * @ignore
     */
    private function queryPersist($array = null, $object = null) {
        $queryKey = "";
        $queryValue = "";
        $i = 1;
        $value = null;
        foreach ($array as $key => $value) {
            if (class_exists($key)) {
                if (!is_null($value)) {
                    $pKey = Table::primaryKey($value);
                    if ($value->$pKey == -1) {
                        $this->persist($value);
                    }
                }
            }
            $sepatator = ",";
            if (sizeof($array) == $i) {
                $sepatator = "";
            }
            $queryKey .= " $key $sepatator ";
            $queryValue .= ":$key $sepatator ";
            $i++;
        }
        $query = " INSERT INTO `" . Table::name($object) . "` ( $queryKey ) VALUES ( $queryValue ) ";
        return $query;
    }

    /**
     * @ignore
     */
    private function queryDelete($object = "", $class = "") {
        $query = "";
        $pKey = Table::primaryKey($object);
        if ($class != "") {
            $query = "DELETE FROM `" . Table::name($class) . "` WHERE (`$pKey` = {$object->$pKey} )";
        } else {
            $query = "DELETE FROM `" . Table::name($object) . "` WHERE (`$pKey` = {$object->$pKey} )";
        }
        if ($object->$pKey) {
            return $query;
        }
        return null;
    }

    /**
     * 
     * @ignore
     */
    private function queryMerge($array = null, $object = null) {
        $queryUpdate = "";
        $pKey = Table::primaryKey($object);
        $i = 1;
        $value = null;
        foreach ($array as $key => $value) {
            if (class_exists($key)) {
                if (!is_null($value)) {
                    $pKey = Table::primaryKey($value);
                    if ($value->$pKey == -1) {
                        $this->persist($value);
                    } else {
                        $this->merge($value);
                    }
                }
            }
            $sepatator = ",";
            if (sizeof($array) == $i) {
                $sepatator = "";
            }
            $queryUpdate .= " $key = :$key $sepatator";
            $i++;
        }
        $query = " UPDATE `" . Table::name($object) . "` SET $queryUpdate WHERE $pKey = {$object->$pKey} ; ";
        return $query;
    }

}
