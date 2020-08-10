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



class StsBlog {
    
    private $Resultado;
    private $id;
    private $comentariosResult;
    private $count;
    
    function getCount() {
        return $this->count;
    }

        function getComentariosResult() {
        return $this->comentariosResult;
    }

        function getResultado() {
        return $this->Resultado;
    }

        
    public function listaPostLimit() {
        $chamarPost = new \App\sts\Model\helper\StsRead();
        $chamarPost->fullRead("SELECT adms_blog.id, titulo, adms_blog.imagem, adms_blog.descricao,"
                . " dia, mes ,ano, adms_usuarios.nick, tags FROM adms_blog "
                . " INNER JOIN adms_usuarios "
                . " ON adms_blog.adms_usuario_id=adms_usuarios.id LIMIT :limit", "limit=3");
        
        $this->Resultado = $chamarPost->getResultado();
    }
    
    public function recentes() {
        $chamarPost = new \App\sts\Model\helper\StsRead();
        $chamarPost->fullRead("SELECT adms_blog.id, titulo"
                . " FROM adms_blog "
                . " INNER JOIN adms_usuarios "
                . " ON adms_blog.adms_usuario_id=adms_usuarios.id LIMIT :limit", "limit=4");
        
        $this->Resultado = $chamarPost->getResultado();
    }
    
    public function post($id = null) {
        
        $this->id = (string) $id;
        
        $chamarPost = new \App\sts\Model\helper\StsRead();
        $chamarPost->fullRead("SELECT adms_blog.id, titulo, adms_blog.imagem, adms_blog.descricao,"
                . " dia, mes ,ano, adms_usuarios.nick, tags FROM adms_blog "
                . " INNER JOIN adms_usuarios "
                . " ON adms_blog.adms_usuario_id=adms_usuarios.id WHERE adms_blog.id=:id LIMIT :limit", "id={$this->id}&limit=1");
        $this->Resultado = $chamarPost->getResultado(); 
                
        $chamarComentario = new \App\sts\Model\helper\StsRead();
        $chamarComentario->fullRead("SELECT * FROM comentarios WHERE post_id=postID", "postID=".$this->id);
        $this->comentariosResult = $chamarComentario->getResultado();
        
        
        $rowCount = new \App\sts\Model\helper\StsRead();
        $rowCount->fullRead("SELECT COUNT(id) as result FROM comentarios WHERE post_id=postID", "postID=".$this->id);
        $this->count= $rowCount->getResultado();
    }
    
    public function categoria() {
        $categoria = new \App\sts\Model\helper\StsRead();
        $categoria->fullRead("SELECT nome_categoria from categoria");
        $this->Resultado = $categoria->getResultado();
    }
}
