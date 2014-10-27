<?php

//

/**
 * SweetPHP <br />
 * <p><b>periods</b></p>
 * @package SweetPHP
 * @package Apps/Model/periods
 * @author sweetphp
 */

/** @Table("periods") */
class periods extends Model {

    /** @Column("{'name':'id', 'type':'bigint','length':'20', 'primaryKey':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $name;
	
	/** @JoinColumn("{'name':'languages', 'referencedColumnName':'id'"}) */
    public $languages;
	
    /** @Column("{'name':'number_days', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $number_days;	
	
    /** @Column("{'name':'number_months', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $number_months;	

    public function __construct() {
        $this->id = null;
		$this->name = $name;
		$this->languages = $languages;
		$this->number_days = 0;
		$this->number_months = 0;
        parent::__construct();
    }

    public function construct($id = null, $name = "", languages $languages, $number_days = 0, $number_months = 0 ) {
        $this->id = $id;
		$this->name = $name;
		$this->languages = $languages;
		$this->number_days = $number_days;
		$this->number_months = $number_months;
    }	
}
