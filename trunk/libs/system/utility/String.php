<?php

/**
 * SweetPHP <br />
 * <p><b>String </b></p>
 * <p>Caminho absoluto para específicação da URL para links, arquivos, imagens.</p><br />
 * @package SweetPHP
 * @subpackage System/Utility
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 * @example CleanString::clean('João ladrão foi a prisão'); 
 */
class String {

    /**
     * is string?
     * @param type $string
     * @return true 
     */
    public static function isString($string = "") {
        if (is_string($string)) {
            return true;
        }
        return false;
    }

    /**
     * is empty?
     * @param type $string 
     */
    public static function isEmpty($string) {
        if (is_array($string)) {
            if (sizeof($string) == 0) {
                return true;
            }
        } else if (is_null($string)) {
            return true;
        } else if (is_string($string)) {
            if ($string == "") {
                return true;
            }
        } else if (is_bool($string)) {
            if ($string == false) {
                return true;
            }
        } else if (empty($string)) {
            return true;
        }
        return false;
    }

    /**
     * @param type var
     * @param type $varY
     * @example $varX == $varY -> return true
     * @return boolean 
     */
    public static function equals($varX, $varY) {
        if ($varX == $varY) {
            return true;
        }
        return false;
    }

    /**
     * Converte String para Float
     * @return float 
     */
    public static function toFloat($string = "") {
        if (is_string($string)) {
            (float) $string = (string) $string;
            return $string;
        }
        return false;
    }

    /**
     * Converte String para Array
     * @return array 
     */
    public static function toArray($string = "") {
        return explode(",", $string);
    }

    /**
     * @param md5(uniqid(date(rand(), true)))
     * @return type 
     */
    public static function getMD5UniqueID() {
        return md5(uniqid(date(rand(), true)));
    }

    /**
     * Converte String para MD5
     * @return string (md5) $var 
     */
    public static function toMD5($string = "") {
        if (is_string($string)) {
            return md5($string);
        }
        return false;
    }

    /**
     * Converte String para Base64Endoce
     * @return (base64_encode) $string 
     * @link http://php.net/manual/pt_BR/function.base64-encode.php Decodifica dados codificados com MIME base64
     */
    public static function toBase64Enconde($string = "") {
        if (is_string($string)) {
            return base64_encode($string);
        }
        return false;
    }

    /**
     * Converte String para Base64Decode
     * @return (base64_decode) $string
     * @link http://www.php.net/manual/pt_BR/function.base64-decode.php Base 64 Decode
     */
    public static function base64Decode($string = "") {
        if (is_string($string)) {
            $string = base64_decode($string);
            return $string;
        }
        return false;
    }

    /**
     * Converte String para Inteiro
     * @return Integer $var 
     */
    public static function toInteger($string = "") {
        if (is_string($string)) {
            (int) $string = (string) $string;
            return $string;
        }
        return false;
    }

    /**
     * Converte String para Upper
     * @return STRING Upper $var 
     */
    public static function toUpper($string = "") {
        return strtoupper($string);
    }

    /**
     * Converte String para Upper
     * @return string lower $var 
     */
    public static function toLower($string = "") {
        return strtolower($string);
    }

    /**
     * Compara String A se � igual a String B
     * Accept Method POST and GET 
     * @return bool (true / false)
     */
    public static function compareString($stringA = "", $stringB = "") {
        if ($stringA == $stringB) {
            return true;
        }
        return false;
    }

    public static function clearStripTags($string = "") {
        $arr = explode(" ", str_replace("\n", " ", strip_tags($string)));
        for ($i = 0; $i < sizeof($arr); $i++) {
            $string .= " " . str_replace(" ", "", ltrim(rtrim(trim($arr[$i]))));
        }
        return $string;
    }

    /**
     * Array com os termos que ser�o substituidos
     * @var array
     */
    private static $removeArray = array(
        "a" => "a",
        "b" => "b",
        "c" => "c",
        "d" => "d",
        "e" => "e",
        "f" => "f",
        "g" => "g",
        "h" => "h",
        "i" => "i",
        "j" => "j",
        "k" => "k",
        "l" => "l",
        "m" => "m",
        "n" => "n",
        "o" => "o",
        "p" => "p",
        "q" => "q",
        "r" => "r",
        "s" => "s",
        "t" => "t",
        "u" => "u",
        "v" => "v",
        "x" => "x",
        "y" => "y",
        "z" => "z",
        "�" => "a",
        "�" => "e",
        "�" => "i",
        "�" => "o",
        "�" => "u",
        "�" => "a",
        "�" => "e",
        "�" => "i",
        "�" => "o",
        "�" => "�",
        "�" => "a",
        "�" => "o",
        "�" => "a",
        "�" => "e",
        "�" => "i",
        "�" => "o",
        "�" => "u",
        "," => "",
        "!" => "",
        "#" => "",
        "%" => "",
        "�" => "",
        "-" => "_",
        "{" => "",
        "}" => "",
        "^" => "",
        "�" => "",
        "`" => "",
        "" => "",
        "/" => "",
        ";" => "",
        ":" => "",
        "?" => "",
        "�" => "1",
        "�" => "2",
        "�" => "3",
        "�" => "a",
        "�" => "o",
        "�" => "c",
        "�" => "u",
        "�" => "a",
        "�" => "i",
        "�" => "o",
        "�" => "e",
        "$" => "s",
        "�" => "y",
        "w" => "w",
        "<" => "",
        ">" => "",
        "[" => "",
        "]" => "",
        "(" => "",
        ")" => "",
        "&" => "e",
        "@" => "",
        "�" => "",
        "*" => "",
        '/' => "",
        "/\/" => "",
        " " => "_", //aki transformamos os espa�os
        "'" => '',
        '"' => "",
        '�' => '1',
        '�' => '2',
        '�' => '3',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '0' => '0'
    );
    private static $acentosArray = array(
        '�' => 'a', '�' => 'A',
        '�' => 'e', '�' => 'E',
        '�' => 'i', '�' => 'i',
        '�' => 'o', '�' => 'O',
        '�' => 'u', '�' => 'U',
        '�' => '�', '�' => '�',
        '�' => '�', '�' => '�',
        '�' => '�', '�' => '�',
        '�' => 'a', '�' => '�',
        '�' => 'c', '�' => 'C',
        '�' => 'a', '�' => '�',
        '�' => 'o', '�' => 'o'
    );

    /**
     * Limpa uma string para ser usada como termo de uma URL
     * @param string $string
     * @return string
     */
    public static function clean($string = "") {
        $finalString = "";
        $string = strtolower($string);
        $string = str_replace("'", "", $string);
        $string = str_replace('"', "", $string);

        $string = trim($string);

        $string = filter_var($string, FILTER_SANITIZE_STRING);

        foreach (str_split($string) as $str) {
            $finalString .= self::$removeArray[$str];
        }

        $finalString = str_replace("__", "_", $finalString);
        $finalString = str_replace("__", "_", $finalString);

        if (substr($finalString, -1, 1) == "_") {
            $finalString = substr($finalString, 0, -1);
        }

        return $finalString;
    }

    /**
     * Remove os acentos de uma string
     *
     * @param string $string
     * @return string
     */
    public static function removeAcento($string = "") {
        $finalString = "";
        $string = str_replace("'", "", $string);
        $string = str_replace('"', "", $string);
        $string = str_replace('&', "", $string);

        $string = trim($string);

        $string = filter_var($string, FILTER_SANITIZE_STRING);

        foreach (str_split($string) as $str) {
            if (key_exists($str, self::$acentosArray)) {
                $finalString .= self::$acentosArray[$str];
            } else {
                $finalString .= $str;
            }
        }

        if (substr($finalString, -1, 1) == "_") {
            $finalString = substr($finalString, 0, -1);
        }
        return $finalString;
    }

    /**
     * Remove os acentos e caracteres simples de uma string
     *
     * @param string $string
     * @return string
     */
    public static function removerCaracteresEspeciais($string = "") {
        $string = strtr($string, "������������������������������������~�`^", "AAAAaaaaEEEeeeOOOOooooUUUuuuCcNnIIii____");
        $string = str_replace("_", " ", $string);
        return $string;
    }

    /**
     * Clear text white HTML code.
     * @param type $string
     * @return $string
     */
    public static function clearTagHTML($string = "") {
        return strip_tags($string, '<(.*?)>');
    }

    /**
     * Resumindo texto
     * @param type $string
     * @return $string
     */
    public static function resume($string = "", $length = 0, $delim = '...') {
        $len = strlen($string);
        if ($len > $length) {
            $string = substr($string, 0, $length) . $delim;
        }
        return $string;
    }

}
