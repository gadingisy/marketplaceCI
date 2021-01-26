<?php
$this->load->view('header');
?>
<!-- ATAS -->
<!-- ATAS -->
<!-- Hero Section Begin -->
<div class="hero-section">
	<div id="iklanCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner ">
			<div class="carousel-item active">
				<img  style="height:490px;"  class="d-block w-100" src="<?= base_url("./assets/img/dummy1.png") ?>">
			</div>
			<?php foreach ($banner as  $key => $data) : ?>

			<div class="carousel-item">

				<img  style="height:490px;"  class="d-block w-100" src="<?= base_url("./assets/upload/images/" . $data->hero_iklan) ?>"
					alt="<?= $data->alt_hero; ?>">
			</div>
			<?php endforeach; ?>
		</div>
		<a class="carousel-control-prev" href="#iklanCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#iklanCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- Hero Section End -->

<!-- BODY BODY BODY BODY BODYBODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY-->
<!-- Women Banner Section Begin -->
<section class="women-banner spad mt-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<?php foreach ($iklan1 as  $key => $data) : ?>
				<?php if(isset($data)){ ?>
				<div class="set-bg product-large"
					data-setbg="<?= base_url("./assets/upload/images/" . $data->gambar_iklan1) ?>"
					alt="<?= $data->alt_iklan1; ?>">
				</div>
				<?php } else { ?>
				<div class="set-bg product-large" data-setbg="<?= base_url('./assets/img/insta-4.jpg'); ?>"></div>
				<?php } ?>

				<?php endforeach; ?>

			</div>
			<div class="col-lg-8 offset-lg-1">
				<div class="filter-control">
					<ul>
						<li class="active">Produk Terbaru</li>

					</ul>
				</div>
				<div class="product-slider owl-carousel">
					<?php foreach ($produk as  $key => $produk) : ?>

					<div class="product-item col-md">
						<div class="pi-pic">

							<img src="<?= base_url("./assets/upload/images/" . $produk->gambar_produk) ?>"
								alt="<?= $produk->nama_produk?>">
							<div class="sale">Sale</div>
							<ul>

								<li class="quick-view"><a
										href="<?php echo base_url('product/index/' . $produk->id_produk); ?>">Lihat
										Produk</a></li>
							</ul>
						</div>

						<div class="pi-text">
							<div class="catagory-name"><?= $produk->nama_kat ?></div>
							<a href="<?php echo base_url('Product/index/' . $produk->id_produk); ?>">
								<h5 style="word-break: break-all;"><?= $produk->nama_produk ?></h5>
							</a>
							<div class="product-price">
								<?= "Rp " . number_format($produk->harga_produk, 2, ',', '.') ?>

							</div>
						</div>
					</div>


					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Women Banner Section End -->


<!-- Deal Of The Week Section Begin-->
<section>
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
		<?php foreach ($iklan2 as  $key => $data) : ?>
				<?php if(isset($data)){ ?>	
				<div class="col-sm-12 text-center">		
				<img style="height:200px; width:720px;" src="<?= base_url("./assets/upload/images/" . $data->gambar_iklan2) ?>" alt="<?= $data->alt_iklan2; ?>" />
				</div>
				<?php } else { ?>
					<div class="col-sm-12 text-center">	
					<img src="<?= base_url('./assets/images/banner1.png'); ?>" />
					</div>
				<?php } ?>

				<?php endforeach; ?>
				</div>
		</div>
	</div>
</section>
<!-- Deal Of The Week Section End -->


<section class="kategori deal-of-week">
	<div class="container">
		<div class="row my-5 justify-content-center section-title">
			<h2>Barang</h2>
		</div>
	</div>
	<!-- Instagram Section Begin -->
	<div class="instagram-photo">
		<div class="product-slider owl-carousel">
			<?php foreach ($row->result() as $key => $data) : ?>
			<div class="product-item">
				<div class="insta-item set-bg bg-danger">
					<div class="inside-text">
						<a href="<?php echo base_url('categories_page/index/' . $data->slug_kat); ?>"><img
								class="pict-category" src="<?= $data->icon_kat ?>"></a>
						<h5><a
								href="<?php echo base_url('categories_page/index/' . $data->slug_kat); ?>"><?= $data->nama_kat ?></a>
						</h5>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<!-- Instagram Section End -->
	<div class="container">
		<div class="row my-5 justify-content-center section-title">
			<h2>Jasa</h2>
		</div>
	</div>
	<!-- Instagram Section Begin -->
	<div class="instagram-photo">
		<div class="product-slider owl-carousel">
			<?php foreach ($row2->result() as $key => $data) : ?>
			<div class="product-item">
				<div class="insta-item set-bg bg-danger">
					<div class="inside-text">
						<a href="<?php echo base_url('categories_page/index/' . $data->slug_kat); ?>"><img
								class="pict-category" src="<?= $data->icon_kat ?>"></a>
						<h5><a
								href="<?php echo base_url('categories_page/index/' . $data->slug_kat); ?>"><?= $data->nama_kat ?></a>
						</h5>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD -->

<!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
<!-- BAWAH     -->
<div class="partner-logo">
	<div class="container">
		<div class="row my-3 justify-content-center section-title">
			<h2 class="text-white text-uppercase">Blog</h2>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6 text-center">

				<div class="product-item col-md">
					<div class="pi-pic">

						<img src="<?= base_url(); ?>/assets/images/2.png" alt="">

					</div>
					<div class="pi-text">

						<a href="">
							<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet
								consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
						</a>
						<div class="product-price mt-3">
							<button class="btn btn-danger btn-block rounded">Baca</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">

				<div class="product-item col-md">
					<div class="pi-pic">

						<img src="<?= base_url(); ?>/assets/images/1.png" alt="">


					</div>

					<div class="pi-text">

						<a href="">
							<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet
								consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
						</a>
						<div class="product-price mt-3">
							<button class="btn btn-danger btn-block rounded">Baca</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">

				<div class="product-item col-md">
					<div class="pi-pic">

						<img src="<?= base_url(); ?>/assets/images/1.png" alt="">


					</div>

					<div class="pi-text">
						<a href="">
							<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet
								consectetur adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>
						</a>
						<div class="product-price mt-3">
							<button class="btn btn-danger btn-block rounded">Baca</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">

				<div class="product-item col-md">
					<div class="pi-pic">
						<img class="text-center" src="<?= base_url(); ?>/assets/images/1.png" alt="">
					</div>

					<div class="pi-text">


						<h6 style="word-break: break-all;" class="text-white">Lorem ipsum dolor sit, amet consectetur
							adipisicing elit. Atque, a. Assumenda incidunt quo quos explicabo.</h6>

						<div class="product-price mt-3">
							<a href="">
								<button class="btn btn-danger btn-block rounded">Baca</button>
							</a>
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
