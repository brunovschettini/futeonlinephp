<?php

/**
 * @global string $GLOBALS['parans']
 * @name $parans 
 */
$parans = null;
//$GLOBALS['parans'] = null;

/**
 * <p>Específica o caminho da página.</p><br />
 * <p>Exemplo: Ao chamar a página home, estarei 
 * instanciando a classe Home, para acessar o 
 * index estarei acessando a function() -> index. 
 * Dentro do index deverá estar específicado o 
 * caminho da view.</p><br />
 * @name Routers
 * @access private 
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class Routers {

    public static function load() {
        global $config;
        if (sizeof(self::getParam()) > 0) {
            if (self::getParam() == '') {
                $view = self::getParam(0);
            } else {
                $view = self::getParam();
            }
        }
        $heading = "";
        $message = "";
        $include = "";
        if (sizeof(self::getParam()) == 0) {
            $view = $config['routers']['default_page'];
        }
        try {
            if (is_array($view)) {
                if (empty($view[0])) {
                    $view[0] = $config['routers']['default_page'];
                }
                $view = $view[0];
            } else {
                $include = $view;
            }
            if (!class_exists(ucfirst($view))) {
                $heading = "Erro 404";
                $message = "Page not found!";
                include("libs/system/errors/error_404.php");
                exit();
            }
            $view = ucfirst($view);
            $class = new $view();
            $page = (string) self::getParam(1) ? self::getParam(1) : 'index';
            if (method_exists($class, $page)) {
                $class->$page();
            } else {
                $heading = "Erro 404";
                $message = "Page not found!";
                include("libs/system/errors/error_404.php");
            }
        } catch (Exception $ex) {
            $heading = "Erro 404";
            $message = "Page not found! {$ex->getMessage()}";
            include("libs/system/errors/error_404.php");
        }
    }

    /**
     * <p>Retorna a posição do valor da requisição get da URL.<p><br />
     * <p>Exemplo: URL de entrada http://localhost/project/product/portables/pendrive/</p>
     * <p>Instanciando o método: <br /> Routers::getParam(value);</p>
     * <p>Resultado: 
     * <br /> echo Routers::getParam(0) => 'product';
     * <br /> echo Routers::getParam(1) => 'portables';
     * <br /> echo Routers::getParam(2) => 'pendrive';</p><br />
     * @name getParam
     * @access private  
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @return param Parâmetro da URL
     */
    public static function getParam($param = -1) {
        global $config;
        $request = str_replace(" ", "", $_SERVER['REQUEST_URI'] ? $_SERVER['REQUEST_URI'] : array());
        $projectName = $config['config']['path'];
        $list = explode("/", $request);
        $newList = array();
        $j = 0;
        for ($i = 0; $i < sizeof($list); $i++) {
            if ($projectName != $list[$i] && $list[$i] != '') {
                $newList[$j] = $list[$i];
                $j++;
            }
        }
        $list = $newList;
        if ($param != -1) {
            try {
                return @$list[$param];
            } catch (Exception $ex) {
                return $list[0];
            }
        } else {
            $routes[0] = $config['routers']['default_page'];
        }
        return $list;
    }

    /**
     * <p>Carrega as views do projeto conforme a página requisitada e espefícado
     *  no controle do projeto na URL de entrada.<p><br />
     * <p>Exemplo: URL de entrada http://localhost/project/home/</p>
     * <br /> changePage('index_view', array());
     * <p>Resultado: </p>
     * @name changePage
     * @access private 
     * @author sweetphp
     * @package SweetPHP
     * @subpackage System/Core
     * @example path '<html><head><title>Hello Word!!!</title></head><body>Hello Word!!!</body></html>';
     * @return include Inclui a pagina solicita
     */
    public static function changePage($param = "", $parans = array()) {
        global $config;
        Param::set($parans);
        $files = $config['extensions'];
        $err = "";
        $ext = 0;
        if (!file_exists("libs/app/views/$param")) {
            for ($i = 0; $i < sizeof($files); $i++) {
                if (!file_exists("libs/app/views/$param.$files[$i]")) {
                    $err++;
                } else {
                    $ext = $files[$i];
                }
            }
            if ($i == $err) {
                include("libs/system/errors/error_404.php");
                exit();
            }
            include "libs/app/views/$param.$ext";
        } else {
            include "libs/app/views/$param";
        }
    }

    /**
     * <p>Verifica se o tipo de entrada é 'xmlhttprequest'.<p><br />
     * @name ajax
     * @access private  
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @return ajax Resultado do AJAX
     */
    public static function ajax() {
        // Alternative - if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        if (IS_AJAX) {
            global $config;
            if($config['config']['access'] == 'Default'){
                try {
                    global $data;
                    $data = isset($_POST['data']) ? $_POST['data'] : "";
                    $act = new Request();
                    $valor = $act->action();
                    echo $valor ? $valor : "";
                } catch (Exception $e) {
                    $e->getMessage();
                }
            }else if($config['config']['access'] == 'Rest'){
                
            }
            
            exit();
        }
    }

}
