<html lang="zxx">

<head>
	<title>InTravel - Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/home/'; ?>images/camp1.png">
	<link href="<?php echo base_url().'assets/home/'; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url().'assets/home/'; ?>css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url().'assets/home/'; ?>css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url().'assets/home/'; ?>css/shop.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/home/'; ?>css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url().'assets/home/'; ?>css/owl.theme.css" type="text/css" media="all">
	<link href="<?php echo base_url().'assets/home/'; ?>css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url().'assets/home/'; ?>css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
	<header>
			<div class="row">
				<div class="col-md-4 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="<?php echo base_url('home') ?>">
							In - Travel
						</a>
					</h1>
				</div>

				<nav class="col-md-8 navbar navbar-expand-lg navbar-light bg-light top-header ">

					<button class="navbar-toggler mx-auto col" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					    aria-expanded="false" aria-label="Toggle navigation">
						<span>
							M E N U
						</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav nav-mega">
							<li class="nav-item active">
								<a class="nav-link ml-lg-0" href="<?php echo base_url('home') ?>">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php 	echo base_url('home/view_package') ?>">Travel Package</a>
							</li>
							<?php if($this->session->userdata('username')):?>
							<li class="nav-item">
								<a class="nav-link" href="<?php 	echo base_url('home/view_book') ?>">Booking Now</a>
							</li>
						<?php endif; ?>
							<li class="nav-item">
								<ul class="nav-link">
									<?php if($this->session->userdata('username')):?>
									<li class="galssescart galssescart2 cart cart box_1">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="display" value="1">
											<a href="<?php echo base_url('home/chart') ?>">
												
				
											
											</a>
											<a style="color: red" href="<?php echo base_url('clogin/logout') ?>">logout</a>
											<?php echo $this->session->userdata('username') ?>


									</li>
									<?php elseif($this->session->userdata('username')!==''):?>
									<li class="button-log">
										<a class="btn-open" href="#">
											<span class="fa fa-user" aria-hidden="true"></span> Login
										</a>
									</li>
									
									<?php endif;?>

								</ul>
							</li>
							<li class="nav-item">
								<div class="overlay-login text-left nav-link">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="<?php echo base_url('clogin/loginindex'); ?>" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your Password with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
										<label class="check" for="check3"></label>
									</div>
									<label style="color: white"><?php echo $this->session->flashdata('msg');?></label><br>

									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
									

								</form>
							</div>
							<!---->
						</div>
					</div>
							</li>
							
							
						</ul>

					</div>
				</nav>

			
			</div>
			
			<label class="top-log mx-auto"></label>
	</header>
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>TRAVEL DONG !
								<span>No TRAVEL no SMART</span>
							</h3>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>TRAVEL Cuy
								<span>Bikin Pintar</span>
							</h3>

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3>TRAVEL TRAVEL
								<span>SOSIS TRAVEL</span>
							</h3>

						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="testimonials p-lg-5 p-3 mt-4">
				<div class="row last-section col mx-auto">
					<h4 class="mx-auto mb-4">
						Kami adalah In-Travel
					</h4>
					<img src="<?php echo base_url()."assets/image/review.png"?>" style="width: 100%; height: 100%">
					<p class="mx-auto mt-4">
						Kami adalah tim profesional muda dari kota Malang yang indah. Kami berspesialisasi dalam menerapkan teknologi baru untuk meningkatkan kualitas travel kelompok. Bekerja dengan Anda, kami akan merencanakan perjalanan sempurna yang sepenuhnya disesuaikan dengan minat grup Anda. Semua logistik akan ditangani, diskon grup dinegosiasikan sedapat mungkin - Anda dapat mempercayai kami untuk melakukan semua kerja keras untuk Anda. Grup Anda dapat bersantai dan menikmati momen tak terlupakan!
					</p>
				</div>
			</div>
			<div class="testimonials p-lg-5 p-3 mt-4 mb-4">
				<div class="row last-section">
					<h2 class="mx-auto mb-4 col-lg-12 text-center">
						Mengapa In-Travel
					</h2>
					<div class="col-lg-4 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-male"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Spesialis Travel</h3>
							<p>Akomodasi, transportasi, tiket untuk atraksi dan makanan – semua diurutkan untuk Anda dan termasuk dalam harga perjalanan Anda</p>
						</div>
					</div>
					<div class="col-lg-4 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fa fa-database"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Nilai Tambah Unik</h3>
							<p>Perkaya tur Anda dengan menambahkan pengalaman kuliner lokal, foto/video drone, atau transportasi mewah.</p>
						</div>
					</div>
					<div class="col-lg-4 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-dollar-sign"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Diskon Dimana Saja</h3>
							<p>Kami selalu menegosiasikan diskon atas nama Anda di hotel, tempat wisata, restoran, toko suvenir, dll, yang sangat mengurangi harga yang Anda bayar untuk tur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//banner-sec-->
	
	<!-- about -->
	<!--footer -->
	<footer class="py-lg-5 py-3" style="padding-bottom: unset !important;">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-6 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Find Our Store</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4486754617565!2d112.61167171437837!3d-7.952498981435545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas+Brawijaya!5e0!3m2!1sid!2sid!4v1556069666216!5m2!1sid!2sid" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
						<div class="phone">
							<P>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</P>

						</div>
					</div>
				</div>
				<div class="col-lg-6 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="contact-info">
						<h4>Contact :</h4>
							<p>Phone : +6281234567890</p>
							<p>Email :
								<a href="mailto:intravel@gmail.com">InTravel@gmail.com</a>
							</p>
						<h4 class="mt-3">Social Media :</h4>
						<ul class="footer-social text-left" style="font-size: 20px;">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<div class="copyright-w3layouts mt-4" style="padding: 1em 0">
				<p class="copy-right text-center ">
					&copy; 2019 In-Travel. Designed by In-Team, All Rights Reserved.
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="<?php echo base_url().'assets/home/'; ?>js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	
	<!-- // modal -->

	<!--search jQuery-->
	<script src="<?php echo base_url().'assets/home/'; ?>js/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo base_url().'assets/home/'; ?>js/classie-search.js"></script>
	<script src="<?php echo base_url().'assets/home/'; ?>js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="<?php echo base_url().'assets/home/'; ?>js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="<?php echo base_url().'assets/home/'; ?>js/simplyCountdown.js"></script>
	<link href="<?php echo base_url().'assets/home/'; ?>css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="<?php echo base_url().'assets/home/'; ?>js/move-top.js"></script>
    <script src="<?php echo base_url().'assets/home/'; ?>js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="<?php echo base_url().'assets/home/'; ?>js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>