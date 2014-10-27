<?php

/**
 * SweetPHP <br />
 * <p><b>Helpers / baseUrl </b></p>
 * <p>Caminho absoluto para específicação da URL para links, arquivos, imagens.</p><br />
 * @package SweetPHP
 * @subpackage System/Utility
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
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
     * <p>Se a requisição for ajax $isAjax = true.<p>
     * @author sweetphp
     * @example redirect('home') vai redirecionar para home (header("Location: www.meypage.com/home");)
     * @example redirect('home', true) vai redirecionar para home quando a requisição for ajax (window.location = 'www.meypage.com/home')
     * @param string $url - URL para redirecionamento
     * @param bool $isAjax - Se redirecionamento via é ajax
     * @return string
     */
    static function redirect($url = "", $isAjax = false) {
        $uri = self::baseUrl($url);
        if ($isAjax) {
            $json = json_encode(array('redirect' => $uri));
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
