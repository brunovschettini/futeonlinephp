<?php

/**
 * Arrays
 * @package SweetPHP
 * @subpackage System/Test
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author Bruno
 * @return string
 * @ignore
 */
class Arrays {

    public static function extractKeyObjectPost($keys = "") {
        $return = null;
        for ($i = 0; $i < sizeof($keys); $i++) {
            $v = ",";
            if ($i == 0) {
                $v = "";
            }
            $key = strtolower($keys[$i]);
            $key = str_replace("ds_", "", $key);
            $key = str_replace("id_", "", $key);
            $key = str_replace("is_", "", $key);
            $key = str_replace("nr_", "", $key);
            $key = str_replace("i_", "", $key);
            $key = str_replace("dt_", "", $key);
            $return .= $v . $key;
        }
        return $return;
    }

}

?>
