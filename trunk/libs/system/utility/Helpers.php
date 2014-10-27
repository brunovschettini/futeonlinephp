<?php

/**
 * SweetPHP <br />
 * <p><b>Helpers / baseUrl </b></p>
 * <p>Caminho absoluto para específicação da URL para links, arquivos, imagens.</p><br />
 * @package SweetPHP
 * @subpackage System/Utility
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 * @example baseUrl('style.css')
 * @param string $uri - Caminho / Arquivo
 * @return string echo 'www.mypage.com/style.css'
 */
class Helpers {

    private static $url = '';

    static function baseUrl($uri = '') {
        return self::getUrl() . '/' . trim($uri);
    }

    /**
     * URL Link
     */
    static function linkUrl($uri = '', $settings = array()) {
        $uri = self::getUrl() . '/' . trim($uri);
        $_SESSION['current_uri'] = $uri;
        return $uri;
    }

    /**
     * SweetPHP <br />
     * <p><b>Helpers / redirect </b></p>
     * <p>Redireciona a página para o local especificado.<p><br />
     * <p>Se a requisição for ajax $isAjax = true.<p>     *   
     * @author sweetphp
     * @example redirect('url'=>'home') vai redirecionar para home (header("Location: www.meypage.com/home");)
     * @example redirect(array('url'=>'home', 'ajax'=>true, 'time'=>5) vai redirecionar para home quando a requisição for ajax (window.location = 'www.meypage.com/home') com tempo de 5 segundos
     * @param Array $set - array('url' => '', 'ajax' => false, 'time' => 0, 'disabled' => 'false'); 
     * @return string
     */
    static function redirect($set = array()) {
        $setting = array(
            'uri' => '',
            'ajax' => false,
            'time' => 0,
            'disabled' => 'false'
        );
        $config = array_merge($setting, $set);
        $uri = self::baseUrl($config['uri']);
        if ($config['ajax']) {
            if ($config['time'] > 0) {
                $json = json_encode(array('redirect' => $uri, 'time' => $config['time'], 'disabled' => $config['disabled']));
            } else {
                $json = json_encode(array('redirect' => $uri, 'disabled' => $config['disabled']));
            }
        } else {
            header("Location: $uri");
        }
        return $json;
    }

    private static function &getUrl() {
        global $config;
        self::$url = '';
        if (!empty($config['config']['https'])) {
            if ($config['config']['https'] == 'true') {
                self::$url .= 'https://';
            } else {
                self::$url .= 'http://';
            }
        }
        self::$url .= $config['config']['domain'];
        if (!empty($config['config']['path'])) {
            self::$url .= "/" . $config['config']['path'];
        }
        return self::$url;
    }

}
