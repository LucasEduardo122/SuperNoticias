<!---start-banner---->
<div class="banner" id="move-top">
    <!----start-image-slider---->
    <div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
        <div class="wrap">
            <div class="slider">
                <ul id="jquery-demo">
                    <?php
                    foreach ($this->Dados['carrousel'] as $carrousel) {
                        extract($carrousel);
                        ?>
                        <li>
                            <a href="#slide<?php
                            for ($c = 0; $c <= 3; $c++) {
                                echo $c;
                            }
                            ?>">
                            </a>
                            <div data-scroll-reveal="enter bottom but wait 0.7s" class="slider-detils">
                                <h3><?php echo $titulo ?></h3>
                                <span><?php echo $descricao ?></span>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                    <!--
                    <li>
                        <a href="#slide2">
                        </a>
                        <div data-scroll-reveal="enter bottom but wait 1s" class="slider-detils">
                            <h3>Lorem Ipsum has been the industry's</h3>
                            <span>Aliquam viverra consectetur nibh a blan dit.</span>
                        </div>
                    </li>
                    <li>
                        <a href="#slide3">
                        </a>
                        <div data-scroll-reveal="enter bottom but wait 1.5s" class="slider-detils">
                            <h3>There are many variations of passages </h3>
                            <span>Proin at amet consectetur adipisc lacinia.</span>
                        </div>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"> </div>
</div>
<!---slider---->
<link rel="stylesheet" href="<?php echo URL ?>assets/css/slippry.css">
<script src="<?php echo URL ?>assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo URL ?>assets/js/scripts-f0e4e0c2.js" type="text/javascript"></script>
<script>
    jQuery('#jquery-demo').slippry({
        // general elements & wrapper
        slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
        // options
        adaptiveHeight: false, // height of the sliders adapts to current slide
        useCSS: false, // true, false -> fallback to js if no browser support
        autoHover: false,
        transition: 'fade'
    });
</script>
<!---scrooling-script--->
<!----//End-image-slider---->
<div class="simple-text">
    <div class="wrap">
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
<div class="Recent-wroks"><!-- start services -->
    <div class="wrap">
        <div class="Recent-wrok">
            <h5 class="heading">Trabalhos Recentes</h5>
            <!----start-img-cursual---->
            <div id="owl-demo" class="owl-carousel">
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/1.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/2.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/3.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/4.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/1.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/2.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/4.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="assets/images/33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/3.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/1.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/4.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="<?php echo URL ?>assets/images/3.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img  src="<?php echo URL ?>assets/images/2.jpg">
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
            </div>
            <!----//End-img-cursual---->
        </div>
        <script type="text/javascript" src="<?php echo URL ?>assets/js/nivo-lightbox.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function () {
        $('#nivo-lightbox-demo a').nivoLightbox({effect: 'fade'});
    });
        </script>

    </div>
</div>
<div class="last_posts"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Últimos posts</h5>
        <div class="l-grids">
            <?php
            for ($c = 0; $c <= 1; $c++) {
                if ($c == 0) {
                    $class = "l-grid-1";
                } else if ($c == 1) {
                    $class = "l-grid-1 l-grid-2";
                }
            }
            foreach ($this->Dados['ultimoPost'] as $ultimoPost) {
                extract($ultimoPost);
                ?>
                <div class="<?php echo $class?>">
                    <div class="desc">
                        <h3><?php echo $titulo ?></h3>
                        <span><?php echo $dia ?>/<?php echo $mes ?>/<?php echo $ano ?>  &nbsp; <?php echo $mes ?></span>
                        <p><?php echo $descricao ?></p>
                    </div>
                    <img src="<?php echo URL ?>assets/images/fairy.jpg">	
                    <div class="clear"> </div>
                </div>

                <?php
            }
            ?>
            <!--<div class="l-grid-1 l-grid-2">
                <div class="desc">
                    <h3>Lorem ipsum dolor amet,consectetur</h3>
                    <span>22/07/2020  &nbsp; Julho</span>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
                <img src="<?php echo URL ?>assets/images/Rezero2.jpg">	
                <div class="clear"> </div>
            </div>
            -->
            <div class="clear"> </div>
        </div>
    </div>
</div>
<div class="testimonial"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">testimonials</h5>
        <div class="test-grids">
            <div class="test-desc">
                <h3>your testimonial here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
            <div class="img_1">
                <img src="<?php echo URL ?>assets/images/avator.png">
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<div class="get_in_touch"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Entrar em contato</h5>
        <div class="get-left">
            <p>Digite ao lado suas perguntas, dúvidas, conselhos e etc...</p>
            <p>Faremos o possível para retornar o contato!</p>
        </div>
        <div class="get-right">
            <form>
                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input type="text" placeholder="seu nick no site" required="">
                        <div class="clear"> </div>
                    </li> 
                    <li class="email_1">
                        <a href="#" class="icon mail"> </a>
                        <input type="email" placeholder="seu email" required="">
                        <div class="clear"> </div>
                    </li> 
                    <div class="clear"> </div>
                    <li>
                        <textarea class="plain buffer" placeholder="Sua mensagem"> Sua mensagem</textarea>
                    </li>
                    <input class="send" type="submit" value="Enviar" />
                    <!--
            <div class="send">
                            <a href="#">SEND</a>
            </div>
                    -->
                </ul>
            </form>
        </div>
        <div class="clear"> </div>
    </div>
</div>