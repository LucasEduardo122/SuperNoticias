<?php

namespace App\sts\Controller;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home {

    private $Dados;

    public function index() {

        $trazerMenu = new \App\sts\Model\StsMenu();
        if (empty($_SESSION['usuarios_id'])) {
            $trazerMenu->menuSite();
        } else {
            $trazerMenu->menuSiteAdm();
        }
        $this->Dados['menu'] = $trazerMenu->getResultado();
        
        $trazerPostCarrousel = new \App\sts\Model\StsHome();
        $trazerPostCarrousel->carrousseuHomePost();
        
        $this->Dados['carrousel'] = $trazerPostCarrousel->getResultado();
        
        $trazerUltimoPost = new \App\sts\Model\StsHome();
        $trazerUltimoPost->ultimoPost();
        
        $this->Dados['ultimoPost'] = $trazerUltimoPost->getResultado();
        
        $view = new \Core\ConfigView("sts/View/home/home", $this->Dados);
        $view->renderizar();
    }

}
