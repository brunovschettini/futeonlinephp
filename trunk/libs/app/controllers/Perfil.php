<?php

class Perfil extends Controller {

    public function perfil() {
        Routers::changePage("usuario_view", array('title' => 'Pefil Usuário'));
    }

    public static function cadastro() {
        self::enviar_cadastro();
        Routers::changePage("cadastro_view", array('title' => 'Cadastro / Login'));
    }

    public static function enviar_cadastro() {
        $user = new User();
        $user->post();
        $people = new People();
        //$people->post();
        $arr = array();
        if (empty($user->people->name)) {
            $arr[] = "Informar nome do usuário!";
        }
        if (empty($user->getMail())) {
            $arr[] = "Informar email!";
        }
        if (!filter_var($user->getMail(), FILTER_VALIDATE_EMAIL)) {
            $arr[] = "Informar válido!";
        }
//        $data = Param::data();
//        if ($user->getPassword() != $data->passwordConfirm) {
//            $arr[] = "Senhas não conferem!";
//        }
        if (sizeof($arr) == 0) {
            return Ajax::response(array('message' => "Cadastro efetuado com sucesso!", 'state' => 'success', 'redirect' => '', 'time' => 5000, 'disabled' => true));
        } else {
            return Ajax::response(array('message' => $arr[0], 'state' => 'warning'), array($user));
        }
    }

}
