<!DOCTYPE html>
<html lang="zxx">

<head>

	<meta charset="UTF-8">
	<meta name="description" content="Fashi Template">
	<meta name="keywords" content="Fashi, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logoold.png">
	<?php foreach ($item as $data2) : ?>
		<title> <?= $data2->nama_produk; ?> by <?= $data2->nama_penjual; ?></title>
	<?php endforeach; ?>
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
							<a href="<?php echo site_url('') ?>">
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
	<!-- Breadcrumb Section Begin -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text product-more">
						<?php foreach ($item as $breadcrumb) : ?>
							<a href="<?= site_url(''); ?>"><i class="fa fa-home"></i> Home</a>
							<a href="<?php echo base_url('Categories_page/index/' . $breadcrumb->slug_kat); ?>"><?= $breadcrumb->nama_kat ?></a>
							<span><?= $breadcrumb->nama_produk ?></span>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Breadcrumb Section Begin -->
	<?php foreach ($item as $data) : ?>
		<section class="product-shop spad page-details" style="relative">
			<div class="col-lg-12">
				<div class="row mx-3">
					<div class="col-lg-6">
						<div style="margin-bottom: 10px;">

							<img class="product-big-img" style="min-width:100%;" src="<?= base_url("./assets/upload/images/" . $data->gambar_produk); ?>" alt="">
						</div>
						<div class="product-thumbs">
							<div class="product-thumbs-track ps-slider owl-carousel">
								<div class="pt active" data-imgbigurl="<?= base_url("./assets/upload/images/" . $data->gambar_produk); ?>"><img src="<?= base_url("./assets/upload/images/" . $data->gambar_produk); ?>" alt=""></div>
								<div class="pt" data-imgbigurl="<?= base_url("./assets/upload/images/" . $data->thumb_produk1); ?>"><img src="<?= base_url("./assets/upload/images/" . $data->thumb_produk1); ?>" alt=""></div>
								<div class="pt" data-imgbigurl="<?= base_url("./assets/upload/images/" . $data->thumb_produk2); ?>"><img src="<?= base_url("./assets/upload/images/" . $data->thumb_produk2); ?>" alt=""></div>
								<div class="pt" data-imgbigurl="<?= base_url("./assets/upload/images/" . $data->thumb_produk3); ?>"><img src="<?= base_url("./assets/upload/images/" . $data->thumb_produk3); ?>" alt=""></div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="product-details">
							<div class="pd-title">
								<span><?= $data->nama_penjual ?></span>
								<h3><?= $data->nama_produk ?></h3>

							</div>

							<div class="pd-desc">

								<h4><?= "Rp " . number_format($data->harga_produk, 2, ',', '.') ?></h4>
							</div>


							<div class="quantity">


								<button type="button" class="btn primary-btn pd-cart" data-toggle="modal" data-target="#kontak">
									Contact
								</button>

							</div>
							<ul class="pd-tags">
								<li><span>CATEGORIES</span>: <?= $data->nama_kat ?></li>

							</ul>
							<div class="pd-share">

								<div class="pd-social">

									<a href="#"><i class="ti-facebook"></i></a>
									<a href="#"><i class="ti-twitter-alt"></i></a>
									<a href="#"><i class="ti-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-tab">
					<div class="tab-item">
						<ul class="nav" role="tablist">
							<li>
								<a class="active" data-toggle="tab" href="#tab-1" role="tab">DESKRIPSI</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab-2" role="tab">SPESIFIKASI</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab-3" role="tab">ARTIKEL</a>
							</li>

						</ul>
					</div>
					<div class="tab-item-content">
						<div class="tab-content">
							<div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
								<div class="product-content">
									<div class="row">
										<div class="col-lg-12">
											<h5>Deskripsi</h5>
											<?= $data->deskripsi_produk ?>

										</div>


									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel">
								<div class="specification-table">
									<table>

										<tr>
											<td class="p-catagory">Harga</td>
											<td>
												<div class="p-price"><?= "Rp " . number_format($data->harga_produk, 2, ',', '.') ?></div>
											</td>
										</tr>


										<tr>
											<td class="p-catagory">Berat</td>
											<td>
												<div class="p-weight"><?= $data->berat_produk ?></div>
											</td>
										</tr>
										<tr>
											<td class="p-catagory">Ukuran</td>
											<td>
												<div class="p-size"><?= $data->ukuran_produk ?></div>
											</td>
										</tr>


									</table>
								</div>
							</div>

							<div class="tab-pane fade" id="tab-3" role="tabpanel">
								<div class="specification-table">
									<div class="row">
										<div class="col-md-12  text-center">
											<h4 class="font-weight-bold mb-3">Judul Artikel</h4>
											<img src="<?= base_url(); ?>/assets/images/2.png" class="my-3" style="width:20%;" alt="">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo, dolorem adipisci doloribus deserunt, fuga, illum amet illo excepturi accusamus sapiente consequatur vitae. Assumenda corporis doloremque ipsum tempora molestias doloribus voluptatibus nam, quaerat dolores veniam vitae corrupti illo quae eum at iure, optio repellat laudantium molestiae et sit! Dignissimos adipisci quibusdam ab quos dolor! Ad deleniti eos exercitationem laboriosam ipsa recusandae molestiae praesentium nulla? Unde cupiditate voluptates vitae, delectus corrupti, sed doloribus expedita, id esse qui asperiores nihil enim et perferendis. Eaque at ut mollitia reprehenderit quia, velit consectetur omnis molestias iure eos optio officiis fugiat non earum iusto qui quibusdam voluptas consequuntur necessitatibus voluptates odio! Impedit eligendi, odio aliquam asperiores at debitis veritatis culpa obcaecati quis ipsum? Sint magni, molestiae, id eligendi hic animi tenetur officiis unde soluta rerum laborum cupiditate doloremque sapiente iste eius quod. Accusantium excepturi, aliquam distinctio possimus voluptas ipsa tenetur accusamus voluptatibus dignissimos eum nam ad impedit quas ea neque nesciunt vel veniam! Molestiae ipsum, harum deleniti ducimus iusto eum alias perspiciatis aspernatur. Architecto, sequi. Delectus beatae similique cumque impedit suscipit qui consectetur culpa repellendus unde, officia molestias eius enim magnam dignissimos in? Veniam, quia iste nam ut consectetur adipisci accusamus error reprehenderit, optio beatae ipsum mollitia ad minima voluptatum enim aut quos minus accusantium sed perspiciatis. Qui beatae perspiciatis dolores consequatur est quia sed ex labore voluptatibus adipisci assumenda laboriosam saepe consectetur blanditiis rem, omnis voluptas modi, nisi reprehenderit suscipit dolorem dignissimos aliquid impedit? Suscipit molestiae quam consequatur neque, dolorem nesciunt reiciendis illum obcaecati molestias, distinctio dolore. Animi, eveniet?</p>
										</div>
									</div>
									</table>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
		</section>
		<div class="modal fade" id="kontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Kontak Pembeli</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<p class="font-weight-bold"><a href="https://wa.me/0<?= $data->hp_penjual ?>?text=Halo, ada yang saya tanyakan dengan produk <?= $data->nama_produk ?>">Klik untuk terhubung dengan WhatsApp Penjual</a></p>
						<p class="font-weight-bold">Facebook : <?= $data->facebook_penjual ?></p>
						<p class="font-weight-bold">Instagram : <?= $data->instagram_penjual ?></p>
						<!-- <p class="font-weight-bold">Description</p>
                                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, molestias placeat quod dolorum eaque reprehenderit atque, alias asperiores magni nobis incidunt ipsam quibusdam! Aspernatur, repellendus.</p> -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Product Shop Section End -->
	<?php endforeach; ?>
	<!-- Related Products Section End -->
	<div class="related-products spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Barang yang lain</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($randomdata as $data) : ?>
					<div class="col-lg-3 col-sm-6">

						<div class="product-item col-md">
							<div class="pi-pic">

								<img src="<?= base_url("./assets/upload/images/" . $data->gambar_produk) ?>" alt="">
								<div class="sale">Sale</div>

								<ul>

									<li class="quick-view"><a href="<?php echo base_url('product/index/' . $data->id_produk); ?>">Lihat Produk</a></li>
								</ul>
							</div>

							<div class="pi-text">

								<a href="<?php echo base_url('product/index/' . $data->id_produk); ?>">
									<h5 style="word-break: break-all;"><?= $data->nama_produk ?></h5>
								</a>
								<div class="product-price">
									<?= "Rp " . number_format($data->harga_produk, 2, ',', '.') ?>

								</div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- Related Products Section End -->
	<div class="partner-logo">
		<div class="container">
		<div class="row my-3 justify-content-center section-title">
			<h2 class="text-white">Blog</h2>
		</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					
					<div class="product-item col-md">
						<div class="pi-pic">

							<img src="<?= base_url(); ?>/assets/images/2.png" alt="">

						</div>
						<div class="pi-text">

							<a href="">
								<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
							</a>
							<div class="product-price mt-3">
								<button class="btn btn-danger btn-block rounded">Baca</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">

					<div class="product-item col-md">
						<div class="pi-pic">

							<img src="<?= base_url(); ?>/assets/images/1.png" alt="">


						</div>

						<div class="pi-text">

							<a href="">
								<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
							</a>
							<div class="product-price mt-3">
								<button class="btn btn-danger btn-block rounded">Baca</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">

					<div class="product-item col-md">
						<div class="pi-pic">

							<img src="<?= base_url(); ?>/assets/images/1.png" alt="">


						</div>

						<div class="pi-text">
							<a href="">
								<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
							</a>
							<div class="product-price mt-3">
								<button class="btn btn-danger btn-block rounded">Baca</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">

					<div class="product-item col-md">
						<div class="pi-pic">
							<img class="text-center" src="<?= base_url(); ?>/assets/images/1.png" alt="">
						</div>

						<div class="pi-text">

							<a href="">
								<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
							</a>
							<div class="product-price mt-3">
								<button class="btn btn-danger btn-block rounded">Baca</button>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php
	$this->load->view('footer');
	?>
