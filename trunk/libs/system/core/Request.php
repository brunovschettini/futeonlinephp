<?php

/**
 * SweetPHP <br />
 * <p><b>Request</b></p>
 * <p>Request, esta classe receba se extender pega os posts ($_POST) 
 * diretamente e passa para o construtor  as requisições e as direciona para a
 * função e método solicitado via AJAX Get e Post. 
 * <b>Exemplo:</b> Dentro do meu form tenho o name que é o nome da Classe e o action
 * que é a ação que será acessada, construída sem a necessidade de ficar todas
 * vez específicando o caminho.</p>
 * <form class="sweetForm" name="ClassName">
 *      <input type="text" name="id" value="1" />
 *      <input type="submit" name="save" />
 *      <input type="submit" name="delete" />
 *      <input class="sweetClick" type="submit" name="action" value="Páge" data-config="{'request':'ClassName','dataAction':'getpage2'}"/>
 * </form>
 * <p> No sweetForm o envio será de todo o conteúdo do formulário</p> 
 * <p> No sweetClick o envio será somente dos valores passados dentro do data-config</p> 
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class Request {

    private $class = null;
    private $action = null;
    private $arguments = null;

    public function __construct($class = null, $action = null, $arguments = null) {
        $this->class = $class;
        $this->action = $action;
        $this->arguments = $arguments;
    }

    /**
     * SweetPHP <br />
     * <p><b>action</b></p>
     * <p>Após receber o type do método direciona a requisição para a Classe e função (método) 
     * da classe desejada automáticamente. </p>
     * @author sweetphp
     * @return method
     */
    public function action() {
        if (empty($_REQUEST)) {
            return null;
        }
        $data = Param::data();
        if (empty($data)) {
            $request = filter_input(INPUT_POST, "request", FILTER_SANITIZE_STRING);
            $action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_STRING);
        } else {
            $request = $data->request;
            $action = $data->action;
        }
        if (empty($request) || empty($action)) {
            if (empty($request)) {
                $request = filter_input(INPUT_GET, "request", FILTER_SANITIZE_STRING);
            }
            if (empty($action)) {
                $action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);
            }
            if (empty($request) || empty($action)) {
                return;
            }
        }
        $return = "";
        $this->setClass($request);
        $this->setAction($action);
        if (!empty($this->class)) {
            $this->setClass(ucfirst($this->class));
            if (!class_exists($this->class)) {
                error_log("Class not found! Request: {$this->class} - Method: {$this->action}.");
                return "";
            }
        }
        if (!method_exists($this->getClass(), $this->action)) {
            error_log("Method not found! Request: {$this->class} - Method: {$this->action}.");
            return "";
        }
        $methodType = $this->getMehodType($this->class, $this->action);
        $class = $this->class;
        if (!empty($this->arguments)) {
            $action = "{$this->action}({$this->arguments})";
        } else {
            $action = "{$this->action}";
        }
        switch ($methodType) {
            case 'public':
            case 'private':
            case 'protected':
                $ref = new $class();
                $return = $ref->$action();
                break;
            case 'static':
                $return = $class::$action();
                break;
        }
        return $return;
    }

    /**
     * SweetPHP <br />
     * <p><b>getMehodType</b></p>
     * <p>Verifica o tipo do método da ação solicitada para construnção da reflexção 
     * para acessar a função. </p>
     * @author sweetphp
     * @return method
     */
    protected function getMehodType($class = "", $method = null) {
        $class = new ReflectionMethod($class, $method);
        if ($class->isAbstract()) {
            return "abstract";
        } else if ($class->isConstructor()) {
            return "contructor";
        } else if ($class->isStatic()) {
            return "static";
        } else if ($class->isPublic()) {
            return "public";
        } else if ($class->isPrivate()) {
            return "private";
        }
        return "public";
    }

    public function getClass() {
        return $this->class;
    }

    public function setClass($class = null) {
        $this->class = $class;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action = null) {
        $this->action = $action;
    }

    public function getArguments() {
        return $this->arguments;
    }

    public function setArguments($arguments = null) {
        $this->arguments = $arguments;
    }

}
