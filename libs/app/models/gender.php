<?php

//

/**
 * SweetPHP <br />
 * <p><b>gender</b></p>
 * @package SweetPHP
 * @package Apps/Model/gender
 * @author sweetphp
 */

/** @Table("gender") */
class gender extends Model {

    /** @Column("{'name':'id', 'type':'bigint','length':'20', 'primaryKey':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $name;
	
	/** @JoinColumn("{'name':'languages', 'referencedColumnName':'id'"}) */
    public $languages;	

    public function __construct() {
        $this->id = null;
		$this->name = $name;
		$this->languages = $languages;
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
	
    public function getLanguages() {
        return $this->languages;
    }

    public function setLanguages(languages $var = null) {
        return $this->languages = $var;
    }	
}
