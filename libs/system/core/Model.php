<?php

/**
 * Variavel auxiliar global
 */
//$varHTMLInput = "";

/**
 * SweetPHP <br />
 * <p><b>Post</b></p>
 * <p>Post, esta classe a se extender pega os posts ($_POST) 
 * diretamente e passa para o construtor do objeto instanciado, para 
 * seu uso e necessario apos instanciar a classe chamar a função getPost(),
 * ele verificara todas as variaveis do objeto e as passara para este objeto. 
 * <b>Importante:</b> Sempre colocar dentro do construtor do objeto extendido o 
 * parent::__construct() para que a classe funcione corretamente</p>
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 * @example $user = new User(); $user->getPost(); <p>(Neste momento todas as variaveis enviadas via data post serao pegas e preenchidas dentro do objeto user, sem a necessidade de usar o $_POST para pegar cada variavel do escopo atual)</p>
 */
abstract class Model extends Controller {

    /**
     * SweetPHP <br />
     * <p><b>Model  - __construct</b></p>
     * <p>IOPost, esta classe a se extender pega os posts ($_POST) 
     * diretamente e passa para o construtor do objeto instanciado, para 
     * seu uso e necessario apos instanciar a classe chamar a função getPost(),
     * ele verificara todas as variaveis do objeto e as passara para este objeto. 
     * <b>Importante:</b> Sempre colocar dentro do construtor do objeto extendido o 
     * parent::__construct() para que a classe funcione corretamente<p>
     * @author sweetphp
     * @example $user = new User(); $user->getPost(); <p>(Neste momento todas as variaveis enviadas via data post serao pegas e preenchidas dentro do objeto user, sem a necessidade de usar o $_POST para pegar cada variavel do escopo atual)</p>
     */
    public function __construct() {
        parent::__construct();
    }

    public function __destruct() {
        //Session::remove(Session::get(md5(get_class($this))));
    }

    /**
     * Conforme documentacao no inicio da classe
     */
    // $param = (object) $_POST[$className];
    // foreach ($param as $property => $value) {
    // $this->$property = $value;
    // $this->$property = utf8_decode($value);
    //}
    //unset($_POST[$className]);
    public function post() {
        if (!empty($this) && is_object($this)) {
            $className = get_class($this);
            $data = Param::data();
            if (empty($data)) {
                if (isset($_POST[$className])) {
                    $this->converteToObject((object) $_POST[$className]);
                }
            } else {
                if (class_exists($className, true)) {
                    $this->converteToObject($data->$className);
                }
                //unset($data->$className);
            }
        }
    }

    public function exists() {
        if (Session::exists(md5(get_class($this)))) {
            return true;
        }
        return false;
    }

    public function get() {
        if (Session::exists(md5(get_class($this)))) {
            $this->converteToObject(json_decode(Session::get(md5(get_class($this)))));
        }
    }

    public function put() {
        Session::put(md5(get_class($this)), json_encode($this));
    }

    public function remove() {
        Session::remove(md5(get_class($this)));
    }

    private function converteToObject($array) {
        $array = (array) $array;
        foreach ($array as $key => $value) {
            if (is_object($value) || is_array($value)) {
                $this->converteToObject($value);
            } else {
                $this->$key = $value;
            }
        }
        return $this;
    }

    /**
     * Conforme documentacao no inicio da classe
     */
    public static function inputPost($property = null) {
        $className = $GLOBALS['varHTMLInput'];
        if (!empty($className)) {
            return InputIOPost::getObjectPost($className, $property);
        }
        unset($GLOBALS['varHTMLInput']);
        return "";
    }

    /**
     * Conforme documentacao no inicio da classe
     */
    public function call_private_method($object, $method, $args = array()) {
        $reflection = new ReflectionClass(get_class($object));
        $closure = $reflection->getMethod($method)->getClosure($object);
        return call_user_func_array($closure, $args);
    }

}
