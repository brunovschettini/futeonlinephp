<?php

/**
 * @name Merge
 * @access public 
 * @package SweetPHP
 * @subpackage System/Utility
 * @copyright  Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class Merge {

    /**
     * <p>Mescla dois objetos<p><br />
     * @name objects
     * @access publuc  
     * @package SweetPHP
     * @subpackage System/Utility
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @param Object $object1
     * @param Object $object2
     * @return Object $object
     */
    public static function objects($object1, $object2) {
        foreach ($object2 as $property => $value) {
            $object1->$property = $value;
        }
        return $object1;
    }

    /**
     * <p>Mescla dois array<p><br />
     * @name arrays
     * @access publuc  
     * @package SweetPHP
     * @subpackage System/Utility
     * @copyright  Copyright (c) 2013 - 2014, Ilines.
     * @author sweetphp
     * @param Array $arr2
     * @param Array $arr2
     * @return Array $arr2
     */
    public static function arrays($arr2 = array(), $arr2 = array()) {
        return array_merge($arr2, $arr2);
    }

}
