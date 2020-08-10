<?php

namespace App\sts\Controller;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Adms {

    private $Dados;
    
    public function index() {
        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSiteAdm();
        $this->Dados['menu'] = $menu->getResultado();

        $this->Dados['user'] = ["id" => $_SESSION['usuarios_id'], "nick" => $_SESSION['nick'], "descricao" => $_SESSION['descricao']];

        $perfilpost = new \App\sts\Model\StsAdms();
        $perfilpost->perfil();
        $this->Dados['posts'] = $perfilpost->getResultado();

        $menuAdm = new \App\sts\Model\StsAdms();
        $menuAdm->menu();
        $this->Dados['menuAdm'] = $menuAdm->getResultado();

        $view = new \Core\ConfigView("sts/View/adm/index", $this->Dados);
        $view->renderizar();
    }

    public function novoPost() {
        
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($this->Dados['sendPost'])){
            unset($this->Dados['sendPost']);
            
            $enviarPost = new \App\sts\Model\StsAdms();
            $enviarPost->addPost($this->Dados);
            
            if($enviarPost->getResultado()){
                $url = URL."blog/index";
                header("Location: $url");
            } else {
                $url = URL."adms/novo-post";
                header("Location: $url");
            }
        }
        
        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSiteAdm();
        $this->Dados['menu'] = $menu->getResultado();


        $view = new \Core\ConfigView("sts/View/adm/novoPost", $this->Dados);
        $view->renderizar();
        }


        public function staff () {
        
        if($_SESSION['usuarios_id'] == 2){
            $_SESSION['msg'] = "<script>flatNotify().error('Você não tem permissão para acessar essa página',2500)</script>";
            $url = URL."home/index";
            header("Location: $url");
        } else if ($_SESSION['usuarios_id'] == 4) {
            $url = URL."adms/index";
            header("Location: $url");
            $_SESSION['msg'] = "<script>flatNotify().error('Você não tem permissão para acessar essa página',2500)</script>";
        }
            
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);   
        
        if(!empty($this->Dados['sendStaff'])) {
            unset($this->Dados['sendStaff']);
            $cadStaff = new \App\sts\Model\StsAdms();
            $cadStaff->addStaff($this->Dados);
            if($cadStaff->getResultado()){
                $url = URL."home/index";
                header("Location: $url");
            } else {
                $url = URL."adms/staff";
                header("Location: $url");
            }
        }
        
        $staff = new \App\sts\Model\StsAdms();
        $staff->staff();
        $this->Dados['staff'] = $staff->getResultado(); 
            
            
        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSiteAdm();
        $this->Dados['menu'] = $menu->getResultado();
        
        
        $view = new \Core\ConfigView("sts/View/adm/staff", $this->Dados);
        $view->renderizar();
    }

}
