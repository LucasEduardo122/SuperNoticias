<?php



namespace Core;


class ConfigView {
    private $Nome;
    private $Dados;
    
    public function __construct($Nome, array $Dados = null) {
        $this->Nome = (string) $Nome;
        $this->Dados = $Dados;
    }
    
    public function renderizar() {
        include 'app/sts/View/include/cabecalho.php';
        include 'app/sts/View/include/sidebar.php';
        if(file_exists('app/' . $this->Nome . '.php')){
            include 'app/'.$this->Nome.'.php';
        } else {
            echo "Erro ao renderizar a página";
        }
        include 'app/sts/View/include/rodape.php';
    }
    
    public function perfil() {
        include 'app/sts/View/include/cabecalhoadm.php';
        include 'app/sts/View/include/sidebar.php';
        if(file_exists('app/' . $this->Nome . '.php')){
            include 'app/'.$this->Nome.'.php';
        } else {
            echo "Erro ao renderizar a página";
        }
        include 'app/sts/View/include/rodape.php';
    }
}
