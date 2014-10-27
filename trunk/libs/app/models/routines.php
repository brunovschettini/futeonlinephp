<?php

//

/**
 * SweetPHP <br />
 * <p><b>users</b></p>
 * @package SweetPHP
 * @package Apps/Model/routines
 * @author sweetphp
 */

/** @Table("routines") */
class routines extends Model {

    /** @Column("{'name':'id', 'type':'int','length':'11', 'primaryKey':'true', 'unique':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $name;
	
    /** @Column("{'name':'page', 'type':'varchar','length':'150', 'nullable':'false'}") */
    public $page;

    /** @Column("{'name':'private_page', 'type':'boolean', 'nullable':'false'}") */
    public $private_page;

	/** @Column("{'name':'active', 'type':'boolean', 'nullable':'false'}") */
    public $active;

}
