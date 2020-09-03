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
							<li class="nav-item">
								<a class="nav-link ml-lg-0" href="<?php echo base_url('home') ?>">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item active">
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
												
											<!-- <button class="top_googles_cart" type="submit" name="submit" value="" style="color: ">
												My Cart
												<i class="fas fa-cart-arrow-down"></i>
											</button> -->
											
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
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?php 	echo base_url('home') ?>">Home</a>
							<i>|</i>
						</li>
						<li>Package</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-2 px-lg-5 px-3 mb-lg-2">
						<!--//banner-sec-->
						<h4 class="tittle-w3layouts text-left my-lg-3 my-3">Featured Package</h4>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								<?php foreach ($tampilantenda as $data): ?>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="<?php echo base_url()."assets/image/".$data->gambar?>" class="img-fluid" alt="">
													</div>
													<div class="item-info-product">
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h5>
																		<?php 	echo $data->judul_travel ?>
																	</h5>
																	<div class="grid-price mt-2">
																		<span class="money mb-4">Rp.<?php 	echo $data->harga ?>/day</span>
																		
																	<h5 style="text-align: justify; font-size: 12px; margin-top: 7px"><?php 	echo $data->keterangan ?></h5>
																	</div>						

																</div>
															</div>
															
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							<?php 	endforeach; ?>
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
		</section>
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
		<!-- price range (top products) -->
		<script src="<?php echo base_url().'assets/home/'; ?>js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="<?php echo base_url().'assets/home/'; ?>js/owl.carousel.js"></script>
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

		<!-- single -->
		<script src="<?php echo base_url().'assets/home/'; ?>js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="<?php echo base_url().'assets/home/'; ?>js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="<?php echo base_url().'assets/home/'; ?>js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

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