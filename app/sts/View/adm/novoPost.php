<div class="get_in_touch"><!-- start last_posts -->
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <div class="wrap">
        <h5 class="heading">Adicionar Post</h5>
        <div class="get-left">
            <p> > Digite ao lado o conteúdo de sua postagem!</p>
            <p> > Não é permitido qualquer post de caráter sexual, alcoolíco, drogas , difamatório, racista e nsfw!</p>
            <p> > Posts deste tipos acarretarão na remoção do seu cargo.</p>
        </div>
        <div class="get-right">
            <form method="POST" action="">
                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input type="text" name="titulo" placeholder="Titulo do post" required="">
                        <div class="clear"> </div>
                    </li> 
                    <li class="email_1">
                        <input class="send" name="sendPost" type="submit" value="Publicar">
                        <div class="clear"> </div>
                    </li> 
                    <div class="clear"> </div>
                    <li>
                        <textarea class="plain buffer" name="descricao"></textarea>
                        <script>
                            CKEDITOR.replace('descricao');
                        </script>
                    </li>

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