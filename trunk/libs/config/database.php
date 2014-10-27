<?php

/**
 * SweetPHP <br />
 * <p><strong>Config -> DB</strong></p>
 * <p><b>Arquivo de configuração da base de dados.</b></p>
 * <p>Inicie as configurações básicas do seu projeto.</p>
 * <ul>
 * <li> host -> Hostname, Local ou IP onde a base esta localizada. Ex: 'host' => 
 * 'localhost'</li>
 * <li> database -> Nome da sua base de dados. Ex: 'database' => 'mybase'</li>
 * <li> user -> Usuário para acessar a base de dados. Ex: User>: 'user' => 'root'</li>
 * <li> password -> Senha da base de dados. Ex: 'password' => '*****'</li>
 * <li> driver -> Driver da conexão ou tipo de banco de dados. Ex: 'driver' => 
 * 'mysql. Aceita tipos: mysql, postgres, sql</li>
 * <li> charset -> Charset ou Collation definida para troca de dados com o banco.
 * Ex: 'charset' => 'UTF-8'. Consulatr documentação PHP ou da sua base de dados.</li>
 * <li> port -> Porta do Hostname, Local ou IP onde a base esta localizada. 
 * Ex: 'port' => '80'; 'port' => '8080'; 'port' => '443' </li>
 * </ul>
 * set => lower_case_table_names=1
 * @package SweetPHP
 * @subpackage Config
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
$config['db'] = array(
    'host' => 'futeonline.com.br',
    'database' => 'futeonl_futebol',
    'user' => 'futeonl',
    'password' => 'ht3Mm@lhead',
    'driver' => 'mysql',
    'charset' => 'UTF8',
    'port' => '3306'
);
