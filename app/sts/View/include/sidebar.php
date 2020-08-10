<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="<?php echo URL ?>home/index">
                    <img src="<?php echo URL ?>assets/images/lg.png" alt=""/>
                    <h1>SUPER NOTICIAS</h1>
                    <div class="clear"> </div>
                </a>
            </div>
            <div class="text">
                <p>SEJA BEM-VINDO(A) AO SUPER NOTICIAS!</p>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!-- start header -->
<div class="header_btm">
    <div class="wrap">
        <!------start-768px-menu---->
        <div id="page">
            <div id="header">
                <a class="navicon" href="#menu-left"> </a>
            </div>
            <nav id="menu-left">
                <ul>
                    <?php
                    foreach ($this->Dados['menu'] as $Menu) {
                        extract($Menu);
                        ?>
                        <li><a href="<?php echo URL.$menu_controller?>/<?php echo $menu_metodo?>"><?php echo $nome_pagina?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <!------start-768px-menu---->
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <?php
                    foreach ($this->Dados['menu'] as $Menu) {
                        extract($Menu);
                        ?>
                        <li><a href="<?php echo URL.$menu_controller?>/<?php echo $menu_metodo?>"><?php echo $nome_pagina?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="h_search">
                <form>
                    <input type="text" value="" placeholder="pesquisar post...">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
