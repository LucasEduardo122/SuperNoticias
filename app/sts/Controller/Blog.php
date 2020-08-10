<?php

namespace App\sts\Controller;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Blog {

    private $Dados;
    private $tags;
    private $id;

    public function index() {
        $menu = new \App\sts\Model\StsMenu();
        $menu->menuSite();
        $this->Dados['menu'] = $menu->getResultado();

        $posts = new \App\sts\Model\StsBlog();
        $posts->listaPostLimit();
        $this->Dados['post'] = $posts->getResultado();
        
        $categoria = new \App\sts\Model\StsBlog();
        $categoria->categoria();
        $this->Dados['categoria'] = $categoria->getResultado();

        $postsRecentes = new \App\sts\Model\StsBlog();
        $postsRecentes->recentes();
        $this->Dados['postrecentes'] = $postsRecentes->getResultado();


        $view = new \Core\ConfigView("sts/View/blog/index", $this->Dados);
        $view->renderizar();
    }

    public function post($id = null) {

        if (!empty($id)) {


            $this->id = (string) $id;

            $menu = new \App\sts\Model\StsMenu();
            $menu->menuSite();
            $this->Dados['menu'] = $menu->getResultado();

            $trazerpost = new \App\sts\Model\StsBlog();
            $trazerpost->post($this->id);
            $this->Dados['postredator'] = $trazerpost->getResultado();
            $this->Dados['comentario'] = $trazerpost->getComentariosResult();
            
            
            $postsRecentes = new \App\sts\Model\StsBlog();
            $postsRecentes->recentes();
            $this->Dados['postrecentes'] = $postsRecentes->getResultado();



            $categoria = new \App\sts\Model\StsBlog();
            $categoria->categoria();
            $this->Dados['categoria'] = $categoria->getResultado();

            $view = new \Core\ConfigView("sts/View/blog/post", $this->Dados);
            $view->renderizar();
        } else {
            $url = URL . 'blog/index';
            header("Location: $url");
        }
    }

}
