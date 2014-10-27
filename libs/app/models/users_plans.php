<?php

//

/**
 * SweetPHP <br />
 * <p><b>users_plans</b></p>
 * @package SweetPHP
 * @package Apps/Model/users
 * @author sweetphp
 */

/** @Table("users_plans") */
class users_plans extends Model {

    /** @Column("{'name':'id', 'type':'int','length':'11', 'primaryKey':'true', 'unique':'true'}") */
    public $id;
	
    /** @JoinColumn("{'name':'users', 'type':'biginteger', 'nullable':'false'}") */
    public $users;	
    
    /** @Column("{'name':'email', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $email;
	
    /** @Column("{'name':'password', 'type':'varchar','length':'255', 'nullable':'false'}") */
    public $password;
	
    /** @Column("{'name':'confirm_code', 'type':'varchar','length':'255', 'nullable':'true'}") */
    public $confirm_code;

    /** @Column("{'name':'password', 'type':'boolean', 'nullable':'false'}") */
    public $active;	

    public function __construct() {
        $this->id = null;
		$this->users = $users;
        $this->email = "";
		$this->password = "";
		$this->confirm_code = $confirm_code;
		$this->active = 0;
        parent::__construct();
    }

    public function construct($id = 0, users $users = null, $email = "", $password = "", $confirm_code = "", $active = false) {
        $this->id = $id;
		$this->users = $users;
        $this->email = $email;
		$this->password = $password;
		$this->confirm_code = $confirm_code;
		$this->active = $active;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($var = 0) {
        return $this->id = $var;
    }
	
    public function getUsers() {
        return $this->users;
    }

    public function setUsers(users $var = null) {
        return $this->users = $var;
    }	

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($var = "") {
        return $this->email = $var;
    }
	
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($var = "") {
        return $this->password = $var;
    }	
	
	
    public function getConfirm_code() {
        return $this->confirm_code;
    }

    public function setConfirm_code($var = 0) {
        return $this->confirm_code = $var;
    }	

		
    public function getActive() {
        return $this->active;
    }

    public function setActive($var = false) {
        return $this->active = $var;
    }	

}
