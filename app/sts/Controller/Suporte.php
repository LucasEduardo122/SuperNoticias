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

class Suporte {

    private $Dados;

    public function sobreNos() {
        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSite();
        $this->Dados['menu'] = $menu->getResultado();

        $equipe = new \App\sts\Model\StsSuporte();
        $equipe->trazerMembrosEquipe();
        $this->Dados['equipe'] = $equipe->getResultado();

        $view = new \Core\ConfigView("sts/View/suporte/sobreNos", $this->Dados);
        $view->renderizar();
    }

    public function recrutamento() {
        
        /*
        $recrutamento = new \App\sts\Model\StsSuporte();
        $recrutamento->trazerRecrutamneto();
        $this->Dados['recrutamento'] = $recrutamento->getResultado();
        */
        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSite();
        $this->Dados['menu'] = $menu->getResultado();
        
        $view = new \Core\ConfigView("sts/View/suporte/recrutamento", $this->Dados);
        $view->renderizar();
    }

}
