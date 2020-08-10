<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\sts\Controller;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Login {

    private $Dados;
    private $resultado;

    public function acesso() {

        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->Dados['sendLogin'])) {
            unset($this->Dados['sendLogin']);


            $logar = new \App\sts\Model\StsLogin();
            $logar->Logar($this->Dados);
            $this->resultado = $logar->getResultado();
            if ($this->resultado) {
                $url = URL . "adms/index";
                header("Location: $url");
            } else {
                $url = URL . "login/acesso";

                header("Location: $url");
            }
        }

        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSite();
        $this->Dados['menu'] = $menu->getResultado();


        $view = new \Core\ConfigView("sts/View/acesso/login", $this->Dados);
        $view->renderizar();
    }

    public function sair() {
        unset($_SESSION['usuarios_id'], $_SESSION['nick'], $_SESSION['nivel_acesso']);
        $url = URL . "home/index";
        header("Location: $url");
    }

}
