<?php //

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
abstract class Data extends Controller  {

    /**
     * SweetPHP <br />
     * <p><b>Post  - __construct</b></p>
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
