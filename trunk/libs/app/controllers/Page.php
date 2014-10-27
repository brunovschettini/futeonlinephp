<?php

/**
 * @example Tela de controler
 * @package SweetPHP
 * @package Apps/Controllers/Examples
 */
class Page {

    public $users;
    public $routers;
    public $templateRouters;

    public function __construct() {
        $this->routers = new Routers();
        $this->users = new users();
        if (Session::exists('userss')) {
            $this->users = Session::get('userss');
        }
    }

    public function index() {
        Routers::changePage('home_view', null, array('title' => 'FuteOnline', 'users' => $this->users));
    }

    public function privacity() {
        Routers::changePage('privacity_view', array('title' => 'Privacidade', 'users' => $this->users));
    }

    public function prices() {
        Routers::changePage('prices_view', array('title' => 'Preços', 'users' => $this->users));
    }

    public function equipe() {
        Routers::changePage('equipe_view', array('title' => 'Preços', 'users' => $this->users));
    }

    public function central_ajuda() {
        Routers::changePage('central_ajuda_view', array('title' => 'Central de Ajuda', 'users' => $this->users));
    }

    public function terms() {
        Routers::changePage('terms_view', array('title' => 'Termos de Uso', 'users' => $this->users));
    }

    public function tour() {
        Routers::changePage('tour_view', array('title' => 'Tour', 'users' => $this->users));
    }

    public function contact_us() {
        Routers::changePage('contact_us_view', array('title' => 'Fale Conosco', 'users' => $this->users));
    }

    public function cadastro() {
        Perfil::cadastro();
    }
    
    public function login() {
        Routers::changePage('login_view', array('title' => 'Login', 'users' => $this->users));
    }

}
