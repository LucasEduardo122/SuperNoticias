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


class StsSuporte {
    
    private $Resultado;
    
    function getResultado() {
        return $this->Resultado;
    }

        
    public function trazerMembrosEquipe() {
        $membrosAtivos = new \App\sts\Model\helper\StsRead();
        $membrosAtivos->fullRead("SELECT nick, nivel.nome, user.descricao from adms_usuarios user"
                . " INNER JOIN sys_niveis_acesso nivel"
                . " ON user.nivel_acesso_id=nivel.id");
        $this->Resultado = $membrosAtivos->getResultado();
    }
    
    public function trazerRecrutamneto() {
        $recrutamento = new \App\sts\Model\helper\StsRead();
        $recrutamento->fullRead("SELECT * ");
    }
}
