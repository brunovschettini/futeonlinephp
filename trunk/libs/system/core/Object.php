<?php

/**
 * SweetPHP <br />
 * <p><b>Object</b></p>
 * <p>Faz conversões de tipos diferentes para Object e de Objeto para outros tipos.</p>
 * <p>Configurar o path do projeto.</p>
 * @name Object
 * @access public
 * @package SweetPHP
 * @subpackage System\Core
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class Object implements Reflector {

    private $object;
    private $array = array();

    private function __construct($array = "", $object = "") {
        $this->array = $array;
        $this->object = $object;
    }

    /**
     * SweetPHP <br />
     * <p><b>objectToArray</b></p>
     * <p>Converte um objeto em array.</p>
     * <p>$object = array();</p>
     * <p>$object['0'] = object($var1);</p>
     * <p>$object['1'] = object($var2);</p>
     * @name objectToArray
     * @access public
     * @package SweetPHP
     * @subpackage System\Core\
     * @copyright	Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @param <type> $object
     * @return Array
     */
    public static function objectToArray($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array = array_keys(get_object_vars($object));
        }
        return $array;
    }

    /**
     * SweetPHP <br />
     * <p><b>objectsToArray</b></p>
     * <p>Converte uma lista de objetos em um array.</p>
     * <p>$object = array();</p>
     * <p>$object['0'] = object($var1);</p>
     * <p>$object['1'] = object($var2);</p>
     * @package SweetPHP
     * @subpackage System\Core\
     * @copyright	Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @param <type> $object
     * @return Array
     */
    public static function objectsToArray($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array = get_object_vars($object[$i]);
        }
        return $array;
    }

    public static function objectToArrays($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array[$i] = get_object_vars($object);
        }
        return $array;
    }

    public static function objectsToArrays($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array[] = get_object_vars($object[$i]);
        }
        return $array;
    }

    /**
     * SweetPHP <br />
     * <p><b>objectToKeysArray</b></p>
     * <p>Abstrai a chave do Array.</p>
     * @package SweetPHP
     * @subpackage System\Core\
     * @copyright	Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @param <type> $object
     * @return $array_keys
     */
    public static function objectToKeysArray($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array = array_keys(get_object_vars($object));
        }
        return $array;
    }

    public static function objectToKeysArrays($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array[] = array_keys(get_object_vars($object));
        }
        return $array;
    }

    public static function objectsToKeysArrays($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array[] = array_keys(get_object_vars($object[$i]));
        }
        return $array;
    }

    /**
     * SweetPHP <br />
     * <p><b>objectToKeysArray</b></p>
     * <p>Abstrai o valor do Array.</p>
     * @package SweetPHP
     * @subpackage System\Core\
     * @copyright	Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @param <type> $object
     * @return $array_value
     */
    public static function objectToValueArray($object) {
        $array = array();
        for ($i = 0; $i < sizeof($object); $i++) {
            $array = array_values(get_object_vars($object));
        }
        return $array;
    }

    public static function objectsToValueArray($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array = array_values(get_object_vars($object[$i]));
        }
        return $array;
    }

    public static function objectToValueArrays($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array[] = array_values(get_object_vars($object));
        }
        return $array;
    }

    public static function objectsToValueArrays($object) {
        $array = array();
        for ($i = 0; $i < count($object); $i++) {
            $array[] = array_values(get_object_vars($object[$i]));
        }
        return $array;
    }

    public static function arrayToObject($array = array()) {
        return (object) $array;
    }

    /**
     * Construct (Edit)
     * @param type $date 
     */
    public function getArray() {
        return $this->array;
    }

    public function setArray($array) {
        $this->array = $array;
    }

    public function getObject() {
        return $this->object;
    }

    public function setObject($object) {
        $this->object = $object;
    }

    public function __toString() {
        
    }

    public static function export() {
        
    }

}
