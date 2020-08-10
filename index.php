<?php
    require './core/Config.php';
    require './vendor/autoload.php';
    
    use Core\ConfigController as Home;
    
    $HOME = new Home;
    $HOME->carregar();