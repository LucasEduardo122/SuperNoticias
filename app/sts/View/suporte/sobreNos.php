<div class="content_1">
    <div class="wrap">
        <div class="about">
            <div class="about-top">
                <div class="col span_1_of_about">
                    <h3 class="heading">Equipe</h3>
                    <div class="section group">
                        <?php
                        foreach ($this->Dados['equipe'] as $equipe) {
                            extract($equipe)
                            ?>
                            <div class="grid_1_of_4 images_1_of_4">
                                <div class="image"><a href="#"><img src="<?php echo URL?>assets/images/Levia.(Closers_.Dimension.Conflict).full.2267905.jpg"></a></div>
                                <h4><a href="#"><?php echo $nick?></a> </h4>
                                <h6><?php echo $nome?></h6>
                                <p><?php echo $descricao?> </p>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="clear"> </div>
                    </div>
                </div>
                <div class="col span_1_of_about1">
                    <h3 class="heading">Comentários Recentes</h3>
                    <ul class="comments-custom unstyled">			
                        <li class="comments-custom_li">
                            <div class="icon"> </div>
                            <div class="right-text">	
                                <a href="#"><h4 class="comments-custom_h">Admin:</h4></a>
                                <div class="comments-custom_txt">
                                    <a href="#" title="Go to this comment">Sed ut perspiciatis unde omnis iste...</a>
                                </div>
                                <time>May 05,2013</time>
                            </div>
                            <div class="clear"> </div>
                        </li>
                        <li class="comments-custom_li">
                            <div class="icon"> </div>
                            <div class="right-text">	
                                <a href="#"><h4 class="comments-custom_h">Admin:</h4></a>
                                <div class="comments-custom_txt">
                                    <a href="#" title="Go to this comment">Sed ut perspiciatis unde omnis iste...</a>
                                </div>
                                <time>May 05,2013</time>
                            </div>
                            <div class="clear"> </div>
                        </li>
                        <li class="comments-custom_li">
                            <div class="icon"> </div>
                            <div class="right-text">	
                                <a href="#"><h4 class="comments-custom_h">Admin:</h4></a>
                                <div class="comments-custom_txt">
                                    <a href="#" title="Go to this comment">Sed ut perspiciatis unde omnis iste...</a>
                                </div>
                                <time>May 05,2013</time>
                            </div>
                            <div class="clear"> </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="about-bottom">
                <div class="about-topgrids">
                    <div class="about-topgrid1">
                        <h3 class="heading">Quem somos nós</h3>
                        <img src="images/img.jpg" title="name">
                        <h5>LOREM IPM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT. PRAESENT VESTIBULUM.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris.Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                    </div>
                </div>
                <div class="about-histore">
                    <h3 class="heading">Nossa Mascote</h3>
                    <div class="historey-lines">
                        <ul>
                            <li><span>Amano Tora &nbsp;-</span></li><br/><br/><br/><br/>
                            <li><p><img src="<?php echo URL ?>assets/images/amano.jpg"/></div></p></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                <div class="about-services">
                    <h3 class="heading">O que postamos?</h3>
                    <div class="questions">
                        <h4><img src="images/marker21.png" alt="">&nbsp;What is Lorem Ipsum?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="questions">
                        <h4><img src="images/marker21.png" alt="">&nbsp;What is Lorem Ipsum?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="questions">
                        <h4><img src="images/marker21.png" alt="">&nbsp;What is Lorem Ipsum?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="clear"></div> 
            </div>
        </div>
    </div>
</div>