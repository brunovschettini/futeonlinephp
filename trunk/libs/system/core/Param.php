<?php

/**
 * SweetPHP <br />
 * <p><b>Param</b></p>
 * <p>Retorna o parâmetro das variáveis ($_GLOBALS).</p>
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class Param {

    /**
     * SweetPHP <br />
     * <p><b>Param / get</b></p>
     * <p>Retorna o parâmetro da $_GLOBAL param.<p>
     * @package SweetPHP
     * @author sweetphp
     * @example get('title') Retornará o title
     */
    public static function get($paramName = "") {
        return @$GLOBALS['parans'][$paramName];
    }

    /**
     * SweetPHP <br />
     * <p><b>Param / set</b></p>
     * <p>Insere um novo parâmetro a $_GLOBAL param.<p>
     * @author sweetphp
     * @example set(array('title'=>'Hello')) Retornará o title
     */
    public static function set($param = array()) {
        if (is_array($param)) {
            $GLOBALS['parans'] = @$param;
        }
    }

    /**
     * SweetPHP <br />
     * <p><b>getData</b></p>
     * <p>Retorna o parâmetro object json.<p>
     * @package SweetPHP
     * @author sweetphp
     * @example get('title') Retornará o title
     */
    public static function data() {
        global $data;
        if (!empty($data)) {
            if (!is_object($data)) {
                $data = json_decode($data);
            }
            return $data;
        }
        return "";
    }

    /**
     * SweetPHP <br />
     * <p><b>getData</b></p>
     * <p>Retorna o parâmetro object json.<p>
     * @package SweetPHP
     * @author sweetphp
     * @example get('title') Retornará o title
     */
    public function getData() {
        global $data;
        if (!empty($data)) {
            if (!is_object($data)) {
                $data = json_decode($data);
            }
            return $data;
        }
        return "";
    }

}
