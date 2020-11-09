<!DOCTYPE html>
<html lang="zxx">

<head>

	<meta charset="UTF-8">
	<meta name="description" content="Fashi Template">
	<meta name="keywords" content="Fashi, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logoold.png">
	<?php if (!empty($produk)) { ?>
		<?php foreach ($produk as $data2) { ?>
			<title> <?= $data2->nama_kat; ?></title>
		<?php } ?>
	<?php } else { ?>

		<title>Coming Soon!</title>

	<?php } ?>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<!-- Css Styles -->

	<link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/font-awesome.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/themify-icons.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/elegant-icons.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/owl.carousel.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/nice-select.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/jquery-ui.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/slicknav.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css') ?>" type="text/css">
	<style>
		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
			left: 0;
			background-color: white;
			z-index: 999;
		}
	</style>

</head>

<body>
	<!-- Page Preloder -->

	<!-- Header Section Begin -->
	<header class="header-section">

		<div class="container">
			<div class="inner-header">
				<div class="row">
					<div class="col-lg-2 col-md-2">
						<div class="logo">
							<a href="<?php echo site_url('index') ?>">
								<img src="<?= base_url('./assets/images/logo.png'); ?>" class="logo_site" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 mb-5 mt-4">
						<div class="advanced-search">
							<div class="input-group">
								<?php echo form_open('search', array(
									'class' => 'col-md-12'
								)); ?>
								<input type="text" name="keyword" placeholder="Apa yang anda butuhkan?">
								<button type="button"><i class="ti-search"></i></button>
								<?php echo form_close() ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="nav-item">
			<div class="container">

				<nav class="nav-menu mobile-menu">
					<ul>
						<li class="active"><a href="<?= site_url(''); ?>">Beranda</a></li>

						<li><a href="#">Barang</a>
							<ul class="dropdown">
								<?php foreach ($row->result() as $key => $data) : ?>

									<li><a href="<?php echo base_url('categories_page/index/' . $data->slug_kat); ?>"><?= $data->nama_kat ?></a></li>

								<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="#">Jasa</a>
							<ul class="dropdown">
								<?php foreach ($row2->result() as $key => $data) : ?>

									<li><a href="<?php echo base_url('categories_page/index/' . $data->slug_kat); ?>"><?= $data->nama_kat ?></a></li>

								<?php endforeach; ?>
							</ul>
						</li>

					</ul>
				</nav>
				<div id="mobile-menu-wrap"></div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<div class="breacrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text">

						<a href="<?= site_url('Index'); ?>"><i class="fa fa-home"></i> Home</a>
						<?php if (!empty($breadcrumb)) { ?>
							<?php foreach ($breadcrumb as $breadcrumb) { ?>
								<span><?= $breadcrumb->nama_kat ?></span>
							<?php } ?>
						<?php } else { ?>
							<span>Coming Soon!</span>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Section Begin -->

	<!-- Product Shop Section Begin -->
	<section class="product-shop spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
					<div class="filter-widget">
						<h4 class="fw-title">Harga</h4>
						<div class="filter-range-wrap">
							<div class="range-slider">
								<div class="price-input">
									Min: &nbsp; <input type="text" id="minamount">
									Max: <br> <input type="text" id="maxamount">
								</div>
							</div>
							<div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="0" data-max="10000">
								<div class="ui-slider-range ui-corner-all ui-widget-header"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
							</div>
						</div>
						<a href="#" class="filter-btn">Filter</a>
					</div>

				</div>
				<div class="col-lg-9 order-1 order-lg-2">
					<div class="product-show-option">
						<div class="row">
							<div class="col-lg-7 col-md-7">
								<div class="select-option">
									<select class="sorting">
										<option value="">Urutkan Berdasarkan...</option>
										<option value="asc">Urutkan Berdasarkan A-Z</option>
										<option value="desc">Urutkan Berdasarkan Z-A</option>
									</select>

								</div>
							</div>

						</div>
					</div>
					<div class="product-list">
						<div class="row">
							<?php if (!empty($semua_pengguna)) {
								foreach ($semua_pengguna as $data) { ?>

									<div class="col-lg-4 col-sm-6">

										<div class="product-item col-md">
											<div class="pi-pic">
												<img src="<?= base_url("./assets/upload/images/" . $data->gambar_produk) ?>" alt="">
												<div class="sale">Sale</div>

												<ul>
													<li class="quick-view"><a href="<?php echo base_url('product/index/' . $data->id_produk); ?>">Lihat Produk</a></li>
												</ul>
											</div>
											<div class="pi-text">
												<div class="catagory-name"><?= $data->nama_penjual ?></div>
												<a href="<?php echo base_url('product/index/' . $data->id_produk); ?>">
													<h5 style="word-break: break-all;"><?= $data->nama_produk ?></h5>
												</a>
												<div class="product-price">
													<?= "Rp " . number_format($data->harga_produk, 2, ',', '.') ?>
												</div>
											</div>
										</div>

									</div>
								<?php } ?>
							<?php } else { ?>
								<p>Tidak Ada Barang</p>

							<?php } ?>

						</div>
						<div class="pagination p1 justify-content-center">
							<ul>
								<?php echo $this->pagination->create_links(); ?>
							</ul>
						</div>



					</div>

				</div>
				<!-- <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div> -->
			</div>
		</div>
		</div>
	</section>
	<!-- Product Shop Section End -->
	<!-- Footer Section Begin -->
	<div class="partner-logo">
		<div class="container">
			<div class="logo-carousel owl-carousel">
				<div class="logo-item">
					<div class="tablecell-inner">
						<img src="<?= base_url('./assets/img/logo-carousel/logo-1.png'); ?>" alt="">

					</div>
				</div>
				<div class="logo-item">
					<div class="tablecell-inner">
						<img src="<?= base_url('./assets/img/logo-carousel/logo-1.png'); ?>" alt="">

					</div>
				</div>
				<div class="logo-item">
					<div class="tablecell-inner">
						<img src="<?= base_url('./assets/img/logo-carousel/logo-1.png'); ?>" alt="">

					</div>
				</div>
				<div class="logo-item">
					<div class="tablecell-inner">
						<img src="<?= base_url('./assets/img/logo-carousel/logo-1.png'); ?>" alt="">

					</div>
				</div>
				<div class="logo-item">
					<div class="tablecell-inner">
						<img src="<?= base_url('./assets/img/logo-carousel/logo-1.png'); ?>" alt="">

					</div>
				</div>


			</div>
		</div>
	</div>
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-left">
						<div class="footer-logo">
							<a href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="w-50" alt=""></a>
						</div>
						<ul>
							<li>Address: Surabaya</li>
							<li>Phone: +6231281381283128</li>
							<li>Email: GerbangLamongs@gmail.com</li>
						</ul>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1">
					<div class="footer-widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Serivius</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer-widget">
						<h5>My Account</h5>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Shopping Cart</a></li>
							<li><a href="#">Categories</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="newslatter-item">
						<h5>Join Our Newsletter Now</h5>
						<p>Get E-mail updates about our latest shop and special offers.</p>
						<form action="#" class="subscribe-form">
							<input type="text" style="border:1px solid #BC2022; background:white;" placeholder="Enter Your Mail">
							<button type="button">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-reserved">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="copyright-text">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib and Gerbang Lamongan</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Js Plugins -->

	<script src="<?php echo base_url('./assets/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/jquery.countdown.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/jquery.nice-select.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/jquery.zoom.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/jquery.dd.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/jquery.slicknav.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/owl.carousel.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/main.js') ?>"></script>
	<script>
	$(document).ready(function(){

		$(window).scroll(function() {
			if ($(this).scrollTop() > 0) {
				$('.header-section').addClass('sticky');
			} else {
				$('.header-section').removeClass('sticky');
			}
		});

		// $("select.sorting").change(function(){
        // var selectedCountry = $(this).children("option:selected").val();

		// $.ajax({
		// 	type: "GET",
		// 	data: status = selectedCountry,
		// 	success: function(response) {
		// 		alert(status);
		// 	}
		// });
	
  		  });
	</script>
</body>
