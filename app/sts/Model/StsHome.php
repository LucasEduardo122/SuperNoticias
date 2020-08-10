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

class StsHome {

    private $Resultado;

    function getResultado() {
        return $this->Resultado;
    }

    
    public function carrousseuHomePost() {
        $trazerPost = new \App\sts\Model\helper\StsRead();
        $trazerPost->fullRead("SELECT titulo, descricao FROM adms_blog ORDER BY id DESC LIMIT 3");
        
        $this->Resultado = $trazerPost->getResultado();
    }
    
    public function ultimoPost() {
        $trazerUltimoPost = new \App\sts\Model\helper\StsRead();
        $trazerUltimoPost->fullRead("SELECT titulo, descricao, dia , mes, ano FROM adms_blog ORDER BY id DESC LIMIT 2");
        
        $this->Resultado = $trazerUltimoPost->getResultado();
    }

}
