<?php

/**
 * @example Tela de controler
 * @package SweetPHP
 * @package Apps/Controllers/Examples
 */
class Friends {

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
    
    public function invite_friends() {
        Routers::changePage('friends_view', null, array('title' => 'Convidar amigos', 'user' => $this->user));
    }
    
    public function pending_invitation() {
        Routers::changePage('friends_view', null, array('title' => 'Solicitação pendentes', 'user' => $this->user));
    }
}
