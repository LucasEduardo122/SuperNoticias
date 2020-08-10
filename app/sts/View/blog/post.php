<div class="blog">
    <div class="main">
        <div class="wrap">
            <div class="single-top">
                <div class="wrapper_single">
                    <?php
                    foreach ($this->Dados['postredator'] as $redator) {
                        extract($redator);
                        ?>
                        <div class="wrapper_top">
                            <div class="grid_1 alpha">
                                <div class="date">
                                    <span>
                                        <?php echo $dia ?>
                                    </span>
                                    <?php echo $mes ?> <?php echo $ano ?>
                                </div>
                            </div>
                            <div class="content span_2_of_single">
                                <h5 class="blog_title"><a href="bloginner.html"><?php echo $titulo ?></a></h5>
                                <div class="links">
                                    <h3 class="comments">By<a href="bloginner.html">&nbsp;<?php echo $nick ?></a></h3>
                                    <h3 class="comments"><button onclick="comentario()">Comentários</button></h3>
                                    <script>
                                        function comentario() {
                                            const div = document.getElementById("comentario");
                                            
                                            div.scrollIntoView();
                                        }
                                    </script>                                
                                    <h3 class="tags">Tags: <?php
                                        $Tags = explode(" ", $tags);

                                        foreach ($Tags as $tagspost) {
                                            ?>

                                            <a href="<?php echo URL . 'tags/' . $tagspost ?>"><?php echo $tagspost . '  |  ' ?></a>
                                            <?php
                                        }
                                        ?>
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
                                        <div class="content">
                                            <div class="span-1-of-1">
                                                <a href="#"><img class="m_img" src="imag                                                                es/sb1.jpg" alt=""></a>
                                            </div>
                                            <div class="span-1-of-2">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer t                                                                                    ook a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                                <p>1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.when an unknown printer took a galley of type and scramble.It has survived not only five centuries, but also the leap into electronic typesetting. </p>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>	
                                        <div class="para para_2">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram                                                                bled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                            <p>When unkown printer took a gallery,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. </p>
                                        </div>
                                        <h4 class="heading">There are many variations in Lorum ipsum available,but the majo                                                        rity has suffered alternation in some.</h4>
                                        <div class="para para_2">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a                                                             type specimen book.</p>
                                        </div>
                                        <div class="images_1"><a href="#"><img src="images/sb6.jpg"></a></div>
                                        <div class="para">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>
                                        <div class="para para_2">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a                                                             type specimen book.</p>
                                        </div>
                                        <div class="para para_1">
                                            <p>"&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                        </div>
                                        <h6 class="text"><a href="#">Lorem Ipsum</a></h6>
                                        <h3 class="heading_1">Share With Youir Friends</h3>
                                        <div class="share_icons">
                                            <a href="#"><img src="images/share_icon1.png"></a>
                                        </div>
                                        <div class="grid_2_page">
                                            <ul>
                                                <li class="preview"><a href="#"><span> </span></a></li>
                                                <li><a href="#">Previous Post </a></li>
                                                <li><a href="#">Next Post</a></li>
                                                <li class="next"><a href="#"><span> </span></a></li>
                                                <div class="clear"> </div>
                                            </ul>
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
                                        <div class="comments" id="comentario">

                                            <h4>Comentários</h4>
                                            <?php
                                            if (!empty($this->Dados['comentario'])) {
                                                foreach ($this->Dados['comentario'] as $comentario) {
                                                    extract($comentario);
                                                    ?>
                                                    <div class="c_grid_1">
                                                        <div class="person_1 plus">
                                                            <a href="#"><span> </span>                                                                                                                                                                                   </a>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="c_sub_grid">
                                                                <p><a href="#"><?php echo $usuario_id ?> <?php echo $data ?> </a></p>
                                                                <h6><a href="#">Reply</a></h6>
                                                                <div class="clear"> </div>
                                                            </div>
                                                            <div class="para">
                                                                <p><?php echo $conteudo ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="clear"> </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            ?> 
                                            <div class="c_grid_1">

                                                <div class="desc">
                                                    <div class="c_sub_grid">
                                                        <p><a href="#"></a></p>
                                                        <h6><a hr                                                                                                                                                                                           ef="#"></a></h6>
                                                        <div class="clear"> </div>
                                                    </div>
                                                    <div class="para">
                                                        <p>Sem comentario</p>
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                    </div>
                                    <?php
                                }
                                ?>


                                <div class = "comments-area">
                                    <h4>Comentar</h4>
                                    <form method = "post" action = "contact-post.html">
                                        <p>
                                            <input type = "text" value = "Nome*" onfocus = "this.value = '';" onblur = "if (this.value == '') {
                                                            this.value = 'Nome*';
                                                        }">
                                        </p>
                                        <p>
                                            <input type = "text" value = "Email *" onfocus = "this.value = '';" onblur = "if (this.value == '') {
                                                            this.value = 'Email *';
                                                        }">
                                        </p>
                                        <div class = "clear"> </div>
                                        <div class = "text_area">
                                            <textarea onfocus = "if (this.value == 'Mensagem*')
                                                            this.value = '';" onblur = "if (this.value == '')
                                                                        this.value = 'mensagem*';">Mensagem*</textarea>
                                        </div>
                                        <div>
                                            <div class = "sky_form">
                                                <label class = "checkbox"><input type = "checkbox" name = "ch                                                                                                                                                                      eckbox"><i>Me notificar por e-mail as repostas dos comentários</i></label>
                                            </div>
                                            <div class = "button send_button">
                                                <input type = "submit" value = "Comentar">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class = "clear"> </div>
                    </div>
                    <?php
                }
                ?>
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
                        <h4>Tags do post</h4>

                        <ul>
                            <?php
                            $Tags = explode(" ", $tags);

                            foreach ($Tags as $tagspost) {
                                ?>
                                <li><a href="#"><?php echo $tagspost ?></a></li>
                                <?php
                            }
                            ?>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
</div>