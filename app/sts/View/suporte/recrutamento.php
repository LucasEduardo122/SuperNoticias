
<div class="main">
    <div class="wrap">
        <div class="cont1 span_2_of_g1">
            <div class="section group">
                <div class="col_1_of_about-box span_1_of_about-box">
                    <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/eromangasensei.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
                    <img style="width: 329px; height: 206px"src="<?php echo URL ?>assets/images/eromangasensei.jpg" alt="">
                </div>
                <div class="col_1_of_about-box span_1_of_about-box">
                    <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/kakashi.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
                    <img style="width: 329px; height: 206px" src="<?php echo URL ?>assets/images/kakashi.jpg" alt="">
                </div>
                <div class="col_1_of_about-box span_1_of_about-box">
                    <div id="nivo-lightbox-demo"> <p> <a href="<?php echo URL ?>assets/images/design.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
                    <img  style="width: 329px; height: 206px" src="<?php echo URL ?>assets/images/design.jpg" alt="">
                </div>
                <div class="clear"></div> 
            </div>
            <div id="modal">
                <div class="modal-inner">
                    <button class="error" id="close-modal">&times;</button>
                    <img src="<?php echo URL ?>assets/images/erro.jpg"/>
                    <p class="errorMSG">Senpai, não estamos recrutando no momento. Mas caso queira informação, ela está nessa pagina!</p>

                </div>
            </div>

            <script>

                var modal = document.getElementById('modal');
                var closeModal = document.getElementById('close-modal');

                closeModal.addEventListener('click', function () {
                    modal.classList.add('modal--hide');
                });

            </script>

        </div>
        <script type="text/javascript" src="<?php echo URL ?>assets/js/nivo-lightbox.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function () {
                    $('#nivo-lightbox-demo a').nivoLightbox({effect: 'fade'});
                });
        </script>
    </div>
</div>
<div id="mm-blocker" style="opacity: 0;"></div>
<div class="nivo-lightbox-overlay nivo-lightbox-theme-default nivo-lightbox-effect-fade">
    <div class="nivo-lightbox-wrap">
        <div class="nivo-lightbox-content">
            <div class="nivo-lightbox-image" style="line-height: 500px; height: 500px;">
                <img src="<?php echo URL ?>images/g11.jpg">
                <h2>Redator</h2>
                <h3>Função: Realizar as postagens no site</h3>
            </div>
        </div>
        <div class="nivo-lightbox-title-wrap"></div>

    </div>
    <a href="#" class="nivo-lightbox-nav nivo-lightbox-prev" style="display: none;">Previous</a>
    <a href="#" class="nivo-lightbox-nav nivo-lightbox-next" style="display: none;">Next</a>
    <a href="#" class="nivo-lightbox-close" title="Close">Close</a>
</div>