<?php

//

/**
 * SweetPHP <br />
 * <p><b>address</b></p>
 * @package SweetPHP
 * @package Apps/Model/address
 * @author sweetphp
 */

/** @Table("address") */
class address extends Model {

    /** @Column("{'name':'id', 'type':'bingint','length':'11', 'primaryKey':'true'}") */
    public $id;
	
	/** @JoinColumn("{'name':'people', 'referencedColumnName':'id'"}) */
    public $people;
    
    /** @Column("{'name':'address', 'type':'varchar','length':'255', 'nullable':'true'}") */
    public $address;
	
    /** @Column("{'name':'city', 'type':'varchar','length':'100', 'nullable':'true'}") */
    public $city;
	
    /** @Column("{'name':'code_postal', 'type':'varchar','length':'100', 'nullable':'true'}") */
    public $code_postal;
	
    /** @Column("{'name':'neighborhood', 'type':'varchar','length':'100', 'nullable':'true'}") */
    public $neighborhood;	
	
    /** @Column("{'name':'people_state', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $people_state;

	/** @JoinColumn("{'name':'country', 'referencedColumnName':'id'"}) */
    public $country;

}
