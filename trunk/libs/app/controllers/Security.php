<?php

/**
 * @example Tela de controler
 * @package SweetPHP
 * @package Apps/Controllers/Examples
 */
class Security {

    public $user;
    public $routers;
    public $templateRouters;

    public function __construct() {
        $this->routers = new Routers();
        $this->user = new User();
        if (Session::exists('user')) {
            $this->user = Session::get('user');
        }
    }

    public function index() {
        Routers::changePage('friends_view', null, array('title' => 'Amigos', 'user' => $this->user));
    }
    
    public function group_profile() {
        Routers::changePage('group_profile_view', null, array('title' => 'Convidar amigos', 'user' => $this->user));
    }
    
    public function group_moderator() {
        Routers::changePage('group_moderator_view', null, array('title' => 'Convidar amigos', 'user' => $this->user));
    }
}
