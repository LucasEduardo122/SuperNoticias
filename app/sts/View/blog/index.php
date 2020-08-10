<div class="blog">
    <div class="main">
        <div class="wrap">
            <div class="single-top">
                <div class="wrapper_single">

                    <?php
                    foreach ($this->Dados['post'] as $post) {
                        extract($post);
                        ?>
                        <div class="wrapper_top">
                            <div class="grid_1 alpha">
                                <div class="date">
                                    <span>
                                        <?php echo $dia ?>
                                    </span>
                                    <?php echo $mes ?>  <?php echo $ano ?>
                                </div>
                            </div>
                            <div class="content span_2_of_single">
                                <h5 class="blog_title"><a href=" <?php echo URL ?>blog/post/<?php echo $id ?>"> <?php echo $titulo ?></a></h5>
                                <div class="content">
                                    <div class="span-1-of-1">
                                        <a href="pages.html"><img class="m_img" src="<?php echo URL ?>/assets/images/Levia.(Closers_.Dimension.Conflict).full.2267905.jpg" alt=""></a>
                                    </div>
                                    <div class="span-1-of-2">
                                        <p><?php echo $descricao ?>.</p>
                                        <a href="<?php echo URL ?>blog/post/<?php echo $id ?>" class="arrow_btn">Leia Mais</a>
                                    </div>
                                    <div class="clear"> </div>
                                </div>	
                                <div class="links">
                                    <h3 class="comments">By<a href="pages.html">&nbsp; <?php echo $nick ?></a></h3>
                                    <h3 class="tags">Tags: <?php
                                        $Tags = explode(" ", $tags);

                                        foreach ($Tags as $tagspost) {
                                            ?>

                                            <a href="<?php echo URL . 'tags/' . $tagspost ?>"><?php echo $tagspost . '  |  ' ?></a>
                                            <?php
                                        }
                                        ?></h3>
                                    <h3>Share</h3>
                                    <h3>
                                        <div class="social_1">
                                            <ul>	
                                                <li class="icon1_t"><a href="#"><span> </span></a></li>
                                                <li class="icon2_f"><a href="#"><span> </span></a></li>	 	
                                            </ul>
                                        </div>
                                    </h3>
                                    <div class="clear"> </div>
                                </div>
                            </div>
                            <div class="clear"> </div>
                        </div> 

                        <?php
                    }
                    ?>
                </div>
                <div class="rsidebar span_1_of_3">
                    <div class="search_box">
                        <form>
                            <input type="text" value="Pesquisa Desativada" disabled="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Pesquisa Desativada';
                                    }"><input type="submit" value="" disabled="">
                        </form>
                    </div>
                    <div class="social_2">	
                        <h4>Nos Siga</h4>
                        <ul>	
                            <li class="facebook"><a href="#"><span> </span></a></li>
                            <li class="twitter"><a href="#"><span> </span></a></li>	 	
                            <li class="google"><a href="#"><span> </span></a></li>
                        </ul>
                    </div>
                    <div class="email_box">
                        <form>
                            <div class="email">
                                <input type="text" value="Insira seu e-mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Insira seu e-mail';
                                        }">
                            </div>
                            <div class="button">
                                <span><input type="submit" value="Inscrever-se"></span>
                            </div>
                        </form>
                    </div>
                    <div class="Categories">
                        <h4>Categorias</h4>
                        <ul class="sidebar">
                            <?php
                            foreach ($this->Dados['categoria'] as $categoria) {
                                extract($categoria);
                                ?>
                                <div class="hover"><li><a href="<?php echo URL ?>categoria/<?php echo $nome_categoria ?>"><?php echo $nome_categoria ?></a></li></div>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="popularpost">
                        <h4>Posts Populares</h4>
                        <div class="image_b">
                            <a href="#"><img src="<?php echo URL ?>assets/images/erro.jpg"></a>
                        </div>
                        <p>Essa funcionalidade chegará em breve!</p>
                        <div class="link_1">
                            <p><a href="#">26,JUL 2020 </a></p>
                            <a href="#" class="arrow_btn right">Sem informação adicional</a>
                            <div class="clear"> </div>
                        </div>
                    </div>
                    <div class="recentpost">
                        <h4>Posts Recentes</h4>
                        <ul class="sidebar_1">
                            <?php
                            foreach ($this->Dados['postrecentes'] as $recentes) {
                                extract($recentes);
                                ?>
                                <li><a href="<?php echo URL ?>blog/post/<?php echo $id ?>"><?php echo $titulo ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="tags">
                        <h4>Tags</h4>
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">development</a></li>
                            <li><a href="#">multipurpose</a></li>
                            <li><a href="#">seo</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </div>

                <div class="clear"> </div>
            </div>	
            <div class="pages">
                <ul>
                    <li class="preview"><a href="#"><span> </span></a></li>
                    <li><a href="#">1 </a></li>
                    <li><a href="#">2 </a></li>
                    <li><a href="#">3 </a></li>
                    <li><a href="#">4 </a></li>
                    <li><a href="#">5 </a></li>
                    <li><a href="#">.... </a></li>
                    <li><a href="#">78</a></li>
                    <li class="next"><a href="#"><span> </span></a></li>
                    <div class="clear"> </div>
                </ul>
            </div>
            <!----//End-content---->
        </div>
    </div>	
</div>