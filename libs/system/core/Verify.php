<?php

/**
 * @name Verify
 * @access private 
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @package SweetPHP
 * @subpackage System/Core
 * @author sweetphp
 */
class Verify {

    /**
     * <p><b>Verify::load()</b></p>
     * <p>Realizar veridicação se a configuração de banco de dados é válida.<p>
     * @name load
     * @access private 
     * @package SweetPHP
     * @author sweetphp
     */
    static function load() {
        global $config;
        $erros = array();
        // DATABASE        
        if (empty($config['db']['host'])) {
            $erros[] = "Database error: hostname empty!";
        }
        if (empty($config['db']['database'])) {
            $erros[] = "Database error: database empty!";
        }
        if (empty($config['db']['user'])) {
            $erros[] = "Database error: user empty!";
        }
        if (sizeof($erros) > 0) {
            echo "<center>";
            echo "<br /><b style='color:red;'>" . sizeof($erros) . " erros(s) / configuração(ões) encontrado(s)</b><br /><br />";
            echo "<ul style='list-style:none;'>";
            for ($i = 0; $i < sizeof($erros); $i++) {
                echo "<li>" . $erros[$i] . "</li>";
            }
            echo "</ul>";
            echo "</center>";
            exit();
        }
    }

}
