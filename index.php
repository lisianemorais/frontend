<?php include('head.php'); ?>

<body>
    <!-- Header Start -->
    <header>
        <?php include('header.php'); ?>
    </header>
    <!-- //Header End -->

    <!-- slider / breadcrumbs section -->
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme" style="width: 100%;">
        <div class="item img-fluid"><img src="assets/images/aposentado-viajando.jpg" alt="slider-image"/>
        </div>
        <div class="item img-fluid"><img src="assets/images/familia_feliz.jpg" alt="slider-image">
        </div>
        <div class="item img-fluid"><img src="assets/images/aposentadoria_especial_saude.jpg" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->

    <!-- Content -->
    <?php include('home.php'); ?>

    <!-- Footer Section Start -->
    <footer>
        <?php include('footer.php')?>
    </footer>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-original-title="Return to top"
       data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

    <!--global js starts-->
    <script type="text/javascript" src="assets/js/frontend/lib.js"></script>
    <script type="text/javascript" src='assets/js/frontend/jquery.circliful.js'></script>
    <script type="text/javascript" src='assets/vendors/wow/js/wow.min.js'></script>
    <script type="text/javascript" src='assets/vendors/owl_carousel/js/owl.carousel.min.js'></script> 

    <!--global js end-->
    <!-- begin page level js -->
    <?php include('footerScripts.php')?>
    <!-- end page level js -->
    <script>
        $(".navbar-toggler-icon").click(function () {
            $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
        })

        $(function () {
            $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
        })
    </script>   
</body>
</html>
