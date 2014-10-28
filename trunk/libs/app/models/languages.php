<?php

//

/**
 * SweetPHP <br />
 * <p><b>languages</b></p>
 * @package SweetPHP
 * @package Apps/Model/languages
 * @author sweetphp
 */

/** @Table("languages") */
class languages extends Model {

    /** @Column("{'name':'id', 'type':'bigint','length':'20', 'primaryKey':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $name;

    public function __construct() {
        $this->id = null;
		$this->name = $name;
        parent::__construct();
    }

    public function construct($id = null, $name = "") {
        $this->id = $id;
		$this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($var = 0) {
        return $this->id = $var;
    }
	
    public function getName() {
        return $this->name;
    }

    public function setName($var = "") {
        return $this->name = $var;
    }
}