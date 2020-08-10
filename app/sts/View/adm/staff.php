<div class="content_1">
    <div class="wrap">
        <div class="about">
            <div class="about-top">
                <div class="col span_1_of_about">
                    <h3 class="heading">Equipe</h3>
                    <div class="section group">
                        <?php
                        foreach ($this->Dados['staff'] as $staff) {
                            extract($staff);
                            ?>
                            <div class="grid_1_of_4 images_1_of_4">
                                <div class="image"><a href="#"><img src="http://localhost/supernoticias/assets/images/Levia.(Closers_.Dimension.Conflict).full.2267905.jpg"></a></div>
                                <h4><a href="#"><?php echo $nick ?></a> </h4>
                                <h6><?php echo $nome ?></h6>
                                <p><?php echo $descricao ?></p>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="clear"> </div>
                    </div>
                </div>
                <div class="col span_1_of_about1">
                    <h3 class="heading">Inserir Membro</h3>

                    <div class="get-rights">
                        <form method="POST" action="">
                            <ul>
                                <li class="names">
                                    <a href="#" class="icon user"> </a>
                                    <input type="text" name="nick" placeholder="seu nick no site" required="">
                                    <div class="clear"> </div>
                                </li>
                                <li class="email_2">
                                    <a href="#" class="icon mail"> </a>
                                    <input type="password" name="senha" placeholder="sua senha" required="">
                                    <div class="clear"> </div>
                                </li>
                            </ul>
                            <select name="nivel_acesso_id">
                                <option selected>Selecione o cargo</option>
                                <option value="1">Administrador</option>
                                <option value="4">Redator</option>
                                <option value="2">Usuario</option>

                            </select>

                            <select name="sys_sit_pgs_id">
                                <option selected>Selecione a situação</option>
                                <option value="1">Ativo</option>


                            </select>
                            <div class="clear"> </div>

                            <input class="send" name="sendStaff" type="submit" value="Inserir staff">
                            <!--
                    <div class="send">
                                    <a href="#">SEND</a>
                    </div>
                            -->

                        </form>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
</div>