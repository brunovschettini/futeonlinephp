<?php

class Ajax {

    public static function response($options = array(), $objects = array()) {
        $setting = array(
            'message' => '',
            'disabled' => false,
            'time' => 0,
            'redirect' => '',
            'title' => '',
            'status' => 'success',
            'data' => ''
        );
        $json = json_encode(array_merge($setting, $options));
        if (sizeof($objects) > 0) {
            for ($i = 0; $i < sizeof($objects); $i++) {
                $json = json_encode(
                        array_merge_recursive(
                                json_decode($json, true), json_decode('{"' . get_class($objects[$i]) . '":' . json_encode($objects[$i]) . '}', true)
                        )
                );
            }
        }
        return $json;
    }

}
