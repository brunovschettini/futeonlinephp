<?php

//

/**
 * SweetPHP <br />
 * <p><b>users</b></p>
 * @package SweetPHP
 * @package Apps/Model/users
 * @author sweetphp
 */

/** @Table("users") */
class users extends Model {

    /** @Column("{'name':'id', 'type':'int','length':'11', 'primaryKey':'true', 'unique':'true'}") */
    public $id;

    /** @JoinColumn("{'name':'people', 'referencedColumnName':'id'"}) */
    public $people;

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
        $this->people = "";
        $this->email = "";
        $this->password = "";
        $this->confirm_code = "";
        $this->active = 0;
        parent::__construct();
    }

    public function construct($id = 0, people $people = null, $email = "", $password = "", $confirm_code = "", $active = false) {
        $this->id = $id;
        $this->people = $people;
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

    public function getPeople() {
        return $this->people;
    }

    public function setPeople(people $var = null) {
        return $this->people = $var;
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
