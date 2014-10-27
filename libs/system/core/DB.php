<?php

/**
 * SweetPHP <br />
 * <p><b>DB </b></p>
 * <p>Realiza conexão com o banco de dados utilizando o PDO. DB extends PDO</p>
 * <code>
 * \@include '../libs/config/database.php'
 * </code>
 * @package SweetPHP
 * @subpackage System/Core
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class DB extends PDO {

    private $server;
    private $database;
    private $user;
    private $passwd;
    private $charset;
    private $engine; // mysql, postgree

    /**
     * SweetPHP <br />
     * <p><b>DB __construct(){};</b></p>
     * <p>Realiza conexão com o banco de dados utilizando o PDO. DB extends PDO</p>
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @return boolean Conexão com o servidor de banco de dados
     */

    public function __construct() {
        global $config;
        $this->server = $config['db']['host'];
        $this->user = $config['db']['user'];
        $this->passwd = $config['db']['password'];
        $this->database = $config['db']['database'];
        $this->engine = $config['db']['driver'];
        $this->charset = $config['db']['charset'];
        try {
            parent::__construct("{$this->engine}:host={$this->server};dbname={$this->database}", $this->user, $this->passwd, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$this->charset}"
                    )
            );
        } catch (PDOException $e) {
            print("Connection database failure: " . $e->getMessage() . "<br /><br />");
            //log($e);
        }
    }

    /**
     * Ver detalhes no método set
     * @return String ServerName
     */
    public function getServer() {
        return $this->server;
    }

    /**
     * SweetPHP <br />
     * <p><b>Server</b></p>
     * <p>Servidor/Host</p>
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core/ORM
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     */
    public function setServer($server) {
        $this->server = $server;
    }

    /**
     * Ver detalhes no método set
     * @return String DataBase
     */
    public function getDatabase() {
        return $this->database;
    }

    /**
     * SweetPHP <br />
     * <p><b>Server</b></p>
     * <p>Servidor/Host</p>
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     */
    public function setDatabase($database) {
        $this->database = $database;
    }

    /**
     * Ver detalhes no método set
     * @return String UserName
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * SweetPHP <br />
     * <p><b>User</b></p>
     * <p>Usuário</p>     
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * Ver detalhes no método set
     * @return String Passwd
     */
    public function getPasswd() {
        return $this->passwd;
    }

    /**
     * SweetPHP <br />
     * <p><b>Passwd</b></p>
     * <p>Senha de acesso ao host</p>     
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     */
    public function setPasswd($passwd) {
        $this->passwd = $passwd;
    }

    /**
     * Ver detalhes no método set
     * @return String Charset
     */
    public function getCharset() {
        return $this->charset;
    }

    /**
     * SweetPHP <br />
     * <p><b>Charset</b></p>
     * <p>Código do charset da base de dados. Geralmente específicado durante a
     * crianão da base de dados ou da tabela.</p>
     * <ul>
     * <li><b>Charsets</b></li>
     * <li>utf8_general_ci</li>
     * <li>iso-8859-1</li>
     * <li>latin-1</li>
     * <li>outros...</li>
     * </ul>
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     */
    public function setCharset($charset) {
        $this->charset = $charset;
    }

    /**
     * Ver detalhes no método set
     * @return String Engine
     */
    public function getEngine() {
        return $this->engine;
    }

    /**
     * SweetPHP <br />
     * <p><b>Engine</b></p>
     * <p>Tipo de Drive de conexão</p>
     * <ul>
     * <li><b>Tipos:</b></li>
     * <li>postgres</li>
     * <li>mysql</li>
     * <li>mysqli</li>
     * </ul>
     * <code>
     * \@include '../libs/config/database.php'
     * </code>
     * @package SweetPHP
     * @subpackage System/Core
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     */
    public function setEngine($engine) {
        $this->engine = $engine;
    }

}
