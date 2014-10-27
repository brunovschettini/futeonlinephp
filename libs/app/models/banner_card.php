<?php

//

/**
 * SweetPHP <br />
 * <p><b>banner_card</b></p>
 * @package SweetPHP
 * @package Apps/Model/banner_card
 * @author sweetphp
 */

/** @Table("banner_card") */
class banner_card extends Model {

    /** @Column("{'name':'id', 'type':'bigint','length':'20', 'primaryKey':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $name;
	
    /** @Column("{'name':'active', 'type':'boolean', 'nullable':'false'}") */
    public $active;	

    public function __construct() {
        $this->id = null;
		$this->name = $name;
		$this->active = 0;
        parent::__construct();
    }

    public function construct($id = null, $name = "", $active = 0) {
        $this->id = $id;
		$this->name = $name;
		$this->active = $active;
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
	
    public function getActive() {
        return $this->active;
    }

    public function setActive($var = 0) {
        return $this->active = $var;
    }		
}
