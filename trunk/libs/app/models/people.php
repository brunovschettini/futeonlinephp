<?php

//

/**
 * SweetPHP <br />
 * <p><b>ExampleModel</b></p>
 * @package SweetPHP
 * @package Apps/Model/Examples
 * @author sweetphp
 * <p>Exemplo de model, objeto<p><br />
 */

/** @Table("people") */
class people extends Model {

    /** @Column("{'name':'id', 'type':'int','length':'11', 'primaryKey':'true', 'unique':'true'}") */
    public $id;
    
    /** @Column("{'name':'name', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $name;
	
    /** @Column("{'name':'last_name', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $last_name;
	
    /** @Column("{'name':'middle_name', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $middle_name;
	
    /** @Column("{'name':'mobile_phone', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $mobile_phone;
	
    /** @Column("{'name':'phone', 'type':'varchar','length':'50', 'nullable':'false'}") */
    public $phone;	
	
    /** @Column("{'name':'birthday', 'type':'date', 'nullable':'false'}") */
    public $birthday;
	
	/** @JoinColumn("{'name':'gender', 'referencedColumnName':'id'"}) */
    public $gender;
	
    /** @Column("{'name':'record_date', 'type':'date', 'nullable':'false'}") */
    public $record_date;

}
