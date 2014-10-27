<?php

/**
 * @example Tela de controler
 * @package SweetPHP
 * @package Apps/Controllers/Examples
 */
class Account {

    var $users;

    public function __construct() {
        $this->routers = new Routers();
        $this->users = new users();
        if (Session::exists('users')) {
            $this->user = Session::get('users');
        }
    }

    public function index() {
        // Routers::changePage('friends_view', null, array('title' => 'Amigos', 'user' => $this->user));
    }
    
    public function register() {
        Routers::changePage('register_view', null, array('title' => 'Registrar', 'users' => $this->users));
    }
    
    public function login() {
        Routers::changePage('login_view', null, array('title' => 'Login', 'users' => $this->users));
    }
    
}
