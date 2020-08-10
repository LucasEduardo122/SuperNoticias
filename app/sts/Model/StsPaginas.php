<?php

namespace App\sts\Model;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsPaginas {

    private $Resultado;
    private $UrlController;
    private $UrlMetodo;

    public function listarPaginas($UrlController = null, $UrlMetodo = null) {
        if (!isset($_SESSION['usuarios_id'])) {
            $_SESSION['usuarios_id'] = null;

            $this->UrlController = (string) $UrlController;
            $this->UrlMetodo = (string) $UrlMetodo;
            $listar = new \App\sts\Model\helper\StsRead();
            $listar->fullRead("SELECT pg.id,
                tpg.tipo tipo_tpg
                FROM sts_paginas pg
                INNER JOIN sys_tps_pgs tpg ON tpg.id=pg.sys_tps_pgs_id
                LEFT JOIN sys_nivacs_pgs nivpg ON nivpg.sts_paginas_id=pg.id AND nivpg.sts_niveis_acesso_id =:adms_niveis_acesso_id
                WHERE (pg.controller =:controller
                AND pg.metodo =:metodo) AND ((pg.lib_pub =:lib_pub) OR (nivpg.permissao =:permissao))
                LIMIT :limit", "adms_niveis_acesso_id={$_SESSION['usuarios_id']}&controller={$this->UrlController}&metodo={$this->UrlMetodo}&lib_pub=1&permissao=2&limit=1");
            $this->Resultado = $listar->getResultado();
            return $this->Resultado;
        } else {
            $this->UrlController = (string) $UrlController;
        $this->UrlMetodo = (string) $UrlMetodo;
        $listar = new \App\sts\Model\helper\StsRead();
        $listar->fullRead("SELECT pg.id,
                tpg.tipo tipo_tpg
                FROM sts_paginas pg
                INNER JOIN sys_tps_pgs tpg ON tpg.id=pg.sys_tps_pgs_id
                LEFT JOIN sys_nivacs_pgs nivpg ON nivpg.sts_paginas_id=pg.id AND nivpg.sts_niveis_acesso_id =:adms_niveis_acesso_id
                WHERE (pg.controller =:controller
                AND pg.metodo =:metodo) AND ((pg.lib_pub =:lib_pub) OR (nivpg.permissao =:permissao)) OR pg.lib_pub =:lib_pu
                LIMIT :limit", "adms_niveis_acesso_id={$_SESSION['usuarios_id']}&controller={$this->UrlController}&metodo={$this->UrlMetodo}&lib_pub=1&lib_pu=2&permissao=2&limit=1");
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
        }
    }

}
