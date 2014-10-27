<?php

/**
 * SweetPHP <br />
 * <p><strong>Config -> Settings</strong></p>
 * <p><b>Arquivo de configuração de rotas e path.</b></p>
 * <p>Inicie as configurações básicas do seu projeto.</p>
 * <ul>
 * <li>
 * <li> development -> Se o projeto esta em desenvolvimento. Ex: 'development' => 'true'</li>
 * <li> project -> Nome principal do projeto. Ex: SweetPHP Project</li>
 * <li> domain -> Domínio ou host do local do servidor. Ex: 'domain' => 'www.yourproject.com'; 
 * 'domain' => 'localhost'; 'domain'=> '127.0.0.1' </li>
 * <li> path -> Path do projeto, caso seja local host. 'path'=>'sweetphp' </li>
 * <li> since -> Ano do ínicio do projeto. Ex: 'since'=>'20140'</li>
 * <li> https -> Se é conexão segura ou não. Ex: 'https'=>'false'</li>
 * <li> port -> Porta. Ex: 'port' => '80'; 'port' => '8080'; 'port' => '443'.</li>
 * </ul>
 */
// CONFIGURAÇÕES
$config['config'] = array(
    'project' => 'futeonline',
    'development' => 'false',
    'domain' => 'localhost',
    'path' => 'futeonline',
    'since' => '2014',
    'https' => 'false',
    'port' => '',
    'access' => 'Default'
);

// 
/**
 * <p><strong>Config -> Routers</strong></p>
 * <p>Página / Classe default do projeto.</p>
 */
$config['routers'] = array(
    'default_page' => 'inicio'
);

/**
 * <p><strong>Config -> Extensões</strong></p>
 * <p>Extensões permitidas.</p>
 */
$config['extensions'] = array(
    'php', 'html', 'htm', 'xhtml'
);

// PÁGINAS PRIVADAS
$safe_pages = array("");

// LOAD FUNCTIONS
$autoload['functions'] = array();
if (!empty($autoload)) {
    foreach ($autoload['functions'] as $key => $value) {
        include('libs/core/' . $value . '.php');
    }
}

/**
 * 
 * @package SweetPHP
 * @subpackage Config
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */

