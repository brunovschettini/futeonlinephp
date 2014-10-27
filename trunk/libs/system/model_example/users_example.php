<?php

/**
 * SweetPHP <br />
 * <p><b>ExampleModel: All objects and column having lower case. Non sensitive case.</b></p>
 * @package SweetPHP
 * @package Core/Model/Examples
 * @author sweetphp
 * <p>Exemplo de model, objeto<p><br />
 */

/** @Table("users_example") */
class users_example extends Model {

    /** @Column("{'name':'id', 'type':'int','length':'11', 'primaryKey':'true'}") */
    public $id;

    /** @Column("{'name':'login', 'type':'varchar', 'length':'20', 'unique':'true', 'nullable':'false'}") */
    public $login;

    /** @Column("{'name':'mail', 'type':'varchar', 'length':'100', 'unique':'true'}") */
    public $mail;

    /** @Column("{'name':'password', 'type':'varchar','length':'255', 'unique':'true', 'nullable':'false'}") */
    public $password;

    /** @Column("{'name':'people', 'type':'int','length':'11', {''}}") */
    var $people;

    /** @Column("{'name':'enable', 'type':'boolean'}") */
    var $enable;

    public function __construct() {
        $this->id = -1;
        $this->login = "";
        $this->mail = "";
        $this->password = "";
        $this->people = new people();
        $this->enable = false;
        parent::__construct();
    }

    public function construct($id = 0, $login = "", $password = "", people $people = null, $mail = "", $enable = false) {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->people = $people;
        $this->mail = $mail;
        $this->enable = $enable;
    }

    public function getId() {
        return $this->id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($var = 0) {
        $this->id = $var;
    }

    public function setLogin($var = "") {
        $this->login = $var;
    }

    public function setPassword($var = "") {
        $this->password = $var;
    }

    public function getPeople() {
        return $this->people;
    }

    public function setPeople(People $var) {
        $this->people = $var;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($var = "") {
        $this->mail = $var;
    }

    public function getEnable() {
        return $this->enable;
    }

    public function setEnable($enable) {
        $this->enable = $enable;
    }

}
