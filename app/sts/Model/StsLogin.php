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

class StsLogin {

    private $resultado;
    private $Dados;
    private $user;
    private $teste;

    function getResultado() {
        return $this->resultado;
    }

    public function Logar(array $dados) {
        $this->Dados = $dados;

        $this->validarDados();

        if ($this->resultado) {

            $testar = new \App\sts\Model\helper\StsRead();
            $testar->fullRead("SELECT * FROM adms_usuarios WHERE nick=:nick", "nick=" . $this->Dados['nick']);
            $this->user = $testar->getResultado();

            $this->validarSenha();
        }
    }

    private function validarDados() {

        $this->Dados = array_map('strip_tags', $this->Dados);

        $this->Dados = array_map('trim', $this->Dados);

        if (in_array('', $this->Dados)) {
            $_SESSION['msg'] = "<script>flatNotify().error('Preencha todos os campos',2500)</script>";
            return $this->Resultado = false;
        } else {
            return $this->resultado = true;
        }
    }

    private function validarSenha() {
        if ($this->Dados['senha'] == $this->user[0]['senha']) {
            $_SESSION['usuarios_id'] = $this->user[0]['id'];
            $_SESSION['nick'] = $this->user[0]['nick'];
            $_SESSION['descricao'] = $this->user[0]['descricao'];
            $_SESSION['nivel_acesso'] = $this->user[0]['nivel_acesso_id'];
            
            return $this->resultado = true;
        } else {
            $_SESSION['msg'] = "<script>flatNotify().error('Usuário ou senha inválidos',2500)</script>";
            return $this->resultado = false;
        }
    }

}
