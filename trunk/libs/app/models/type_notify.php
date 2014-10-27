<?php

//

/**
 * SweetPHP <br />
 * <p><b>type_notify</b></p>
 * @package SweetPHP
 * @package Apps/Model/type_notify
 * @author sweetphp
 */

/** @Table("type_notify") */
class type_notify extends Model {

    /** @Column("{'name':'id', 'type':'bigint','length':'20', 'primaryKey':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $name;
	
	/** @JoinColumn("{'name':'languages', 'referencedColumnName':'id'"}) */
    public $languages; 
   
}

