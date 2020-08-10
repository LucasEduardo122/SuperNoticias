<html lang="pt_br">
    <head>
        <title>Super Noticias | Home</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link href="<?php echo URL?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo URL?>assets/css/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo URL?>assets/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL?>assets/css/menu.css">
        <script type="text/javascript" src="<?php echo URL?>assets/js/jquery.min.js"></script>
        <script src="<?php echo URL?>assets/js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 4,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: true,
                    navigationText: ["", ""],
                    rewindNav: false,
                    scrollPerPage: false,
                    pagination: false,
                    paginationNumbers: false,
                });
            });
        </script>
        <!-- //Owl Carousel Assets -->
        <!-----768px-menu----->
        <link type="text/css" rel="stylesheet" href="<?php echo URL?>assets/css/jquery.mmenu.all.css" />
        <script type="text/javascript" src="<?php echo URL?>assets/js/jquery.mmenu.js"></script>
        <script type="text/javascript">
//	The menu on the left
$(function () {
$('nav#menu-left').mmenu();
});
        </script>
        <!-----//768px-menu----->
        <link rel="stylesheet" type="text/css" href="<?php echo URL?>assets/css/notify.css">
    </head>
    <body>