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

class StsMenu {
    
    private $Resultado;
    
    function getResultado() {
        return $this->Resultado;
    }

        
    public function menuSite() {
        $trazerMenu = new \App\sts\Model\helper\StsRead();
       
        $trazerMenu->fullRead("SELECT paginas.controller, paginas.metodo, paginas.menu_controller, paginas.menu_metodo, paginas.nome_pagina FROM sys_nivacs_pgs acess_pag"
                . " INNER JOIN sys_menu menu"
                . " ON acess_pag.sts_menu_id=menu.id"
                . " INNER JOIN sts_paginas paginas"
                . " ON acess_pag.sts_paginas_id=paginas.id"
                . " WHERE acess_pag.permissao=:permissao AND acess_pag.lib_menu=:lib_menu AND acess_pag.sts_niveis_acesso_id=:nivel_id AND menu.id != 7 AND menu.id != 8 ",
                "permissao=2&lib_menu=1&nivel_id=2");
        
        $this->Resultado = $trazerMenu->getResultado();
    }
    
    public function menuSiteAdm() {
        $trazerMenu = new \App\sts\Model\helper\StsRead();
       
        $trazerMenu->fullRead("SELECT paginas.controller, paginas.metodo, paginas.menu_controller, paginas.menu_metodo, paginas.nome_pagina FROM sys_nivacs_pgs acess_pag"
                . " INNER JOIN sys_menu menu"
                . " ON acess_pag.sts_menu_id=menu.id"
                . " INNER JOIN sts_paginas paginas"
                . " ON acess_pag.sts_paginas_id=paginas.id"
                . " WHERE acess_pag.permissao=:permissao AND acess_pag.lib_menu=:lib_menu AND menu.id != 6 AND menu.id != 8 AND menu.id != 9 AND menu.id != 10",
                "permissao=2&lib_menu=1");
        
        $this->Resultado = $trazerMenu->getResultado();
    }
}
