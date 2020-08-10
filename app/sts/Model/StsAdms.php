<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\sts\Model;

if (!defined('URL')) {
    header("Location: /");
    exit();
}
if (empty($_SESSION['usuarios_id'])) {
    $url = URL . "home/index";
    header("Location: $url");
}

class StsAdms {

    private $resultado;
    private $Dados;
    
    function getResultado() {
        return $this->resultado;
    }

    public function perfil() {
        $trazerpostperfil = new \App\sts\Model\helper\StsRead();
        $trazerpostperfil->fullRead("SELECT * FROM adms_blog WHERE adms_usuario_id=:user_id", "user_id=" . $_SESSION['usuarios_id']);
        $this->resultado = $trazerpostperfil->getResultado();
    }

    public function menu() {
        $trazerMenu = new \App\sts\Model\helper\StsRead();
        $trazerMenu->fullRead("SELECT controller, metodo, menu_controller, menu_metodo, nome_pagina FROM sts_paginas WHERE lib_pub=:lib_menu", "lib_menu=2");
        $this->resultado = $trazerMenu->getResultado();
    }

    public function staff() {

        $Trazerstaff = new \App\sts\Model\helper\StsRead();
        $Trazerstaff->fullRead("SELECT  user.nick, user.descricao, nivel.nome FROM adms_usuarios user "
                . " INNER JOIN sys_niveis_acesso nivel"
                . " ON user.nivel_acesso_id=nivel.id WHERE nivel_acesso_id=:adm OR nivel_acesso_id=:dono", "adm=1&dono=3");
        $this->resultado = $Trazerstaff->getResultado();
    }

    public function addStaff(array $dados) {
        $this->Dados = $dados;
        
        $cadastrar = new \App\sts\Model\helper\StsCreate();
        $cadastrar->exeCreate("adms_usuarios", $this->Dados);
        $this->resultado = $cadastrar->getResultado();
    }
    
    public function addPost(array $dados){
        
        $array = ["adms_usuario_id" => $_SESSION['usuarios_id'], "categoria_id"=> 3, "dia"=> 04, "mes"=>"Ago", "ano"=>2020, "tags"=>"Teste Blog Staff"];
        
        $DaDos = array_merge($dados, $array);
        
        
        $this->Dados = $DaDos;
        
        $inserirPost = new \App\sts\Model\helper\StsCreate();
        $inserirPost->exeCreate("adms_blog", $this->Dados);
        
        if($inserirPost->getResultado()){
            return $this->resultado = true;
        } else {
            return $this->resultado = false;
        }
    }
}
