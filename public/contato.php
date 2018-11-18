
<?php include('head.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/css/frontend/contact.css">
<body>
    <!-- Header Start -->
    <header>
        <?php include('header.php'); ?>
    </header>

    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
	            	<ol class="breadcrumb">
		                <li>
		                    <a href="index.php"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Home
		                    </a>
		                </li>
		                <li class="d-none d-lg-block d-sm-block d-md-block">
		                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
		                    <a href="#">Contato</a>
		                </li>
	            	</ol>
		            <div class="float-right breadcrum_adjust">
		                <i class="livicon icon3" data-name="cellphone" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Contato
		            </div>
       			</div>
    		</div>
        </div>
    </div>
    <!-- Content -->
    <div class="container">
    	 <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6 col-lg-6 col-12 my-3">
            	<h2>Contato</h2>
                <!-- Notifications -->
                <div id="notific">
                	<!-- Todo -->
				</div>
				<form class="contact" id="contact">
					<div class="form-group">
					    <input type="text" id='contact-name' name="contact-name" class="form-control input-lg" placeholder="Digite seu nome" required>
					</div>
					<div class="form-group">
					    <input type="email" id='contact-email'	name="contact-email" class="form-control input-lg" placeholder="Digite seu endereço de e-mail" required>
					</div>
					<div class="form-group">
					    <input type="text" id='contact-telephone'	name="contact-telephone" class="form-control input-lg" placeholder="Digite seu Telefone" required>
					</div>
					<div class="form-group">
					    <textarea name="contact-msg" id="contact-msg" class="form-control input-lg no-resize resize_vertical" rows="6" placeholder="Deixe sua mensagem" required></textarea>
					</div>
					<div class="input-group">
					    <button class="btn btn-primary mr-1" type="submit" id="submmit-contact">Enviar</button>
					    <button class="btn btn-danger" type="reset">Limpar</button>
					</div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
		    <!-- Address Section Start -->
		    <div class="col-md-6 col-sm-6" id="address_margt">
		        <div class="media media-top media-right">
		            <a href="#">
		            <div class="box-icon">
		            <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
		            </div>
		            </a>
		            <div class="media-body ml-3">
		                <h4 class="media-heading">Endereço:</h4>
		                <div class="danger">Lima e Souza Advogados</div>
		                <address>
		                    <br> Av Azenha 1678/503, Azenha
		                    <br> Porto Alegre - RS
		                    <br> CEP 90160-000
		                </address>
		            </div>
		        </div>
		        <div class="media media-top">
		            <a href="#">
		            <div class="box-icon">
		            <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
		            </div>
		            </a>
		            <div class="media-body ml-3">
		                <h4 class="media-heading">Telefones:</h4>(51) 3737-9004
		                <br /> (51) 98436-4457
		            </div>
		        </div>
		    </div>
		    <!-- //Address Section End -->
        </div>
    </div>
     <!-- Map Section Start -->
    <div class="">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
    <!-- //map Section End -->

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
    <!-- page level js starts-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
    <script type="text/javascript" src="assets/vendors/gmaps/js/gmaps.min.js" ></script>
    <!--page level js ends-->

    <!-- begin page level js -->
    <?php include('footerScripts.php')?>
    <!-- end page level js -->

    <script>
    	$(document).ready(function() {
            var map = new GMaps({
                el: '#map',
                lat: -30.058547,
                lng: -51.2157324
            });
            map.addMarker({
                lat: -30.058547,
                lng: -51.2157324,
                title: 'Porto Alegre'
            });
        });

        $(".navbar-toggler-icon").click(function () {
            $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
        })

        $(function () {
            $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
        })

        $('#submmit-contact').on('click', function(){
        	let data = {
        		'contact-name':$('#contact-name').val(),
        		'contact-email':$('#contact-email').val(),
        		'contact-message':$('#contact-msg').val(),
        		'contact-telephone':$('#contact-telephone').val()
        	}
        	$.ajax({
        		url: "../src/emails/sendEmail.php",
        		type:'post',
  				data: {'data':data},
        	}).done(function(response){
        		alert(response);
        		console.log(response)
        	});
        });
    </script>   
</body>
</html>
