<?php
$this->load->view('header');
?>
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- ATAS -->
<!-- Hero Section Begin -->
<section class="hero-section">
	<div class="hero-items owl-carousel">
		<div class="single-hero-items set-bg" data-setbg="<?= base_url('./assets/img/hero-1.jpg') ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<span>Welcome To</span>
						<h1>Gerbang Lamongan</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore</p>

					</div>
				</div>

			</div>
		</div>
		<div class="single-hero-items set-bg" data-setbg="<?= base_url('./assets/img/hero-2.jpg') ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<span>Welcome To</span>
						<h1>Gerbang Lamongan</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore</p>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<!-- BODY BODY BODY BODY BODYBODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY-->
<!-- Women Banner Section Begin -->
<section class="women-banner spad mt-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<div class="product-large set-bg" style="background: #bc2022;">
					<h2>Produk Terbaru</h2>

				</div>
			</div>
			<div class="col-lg-8 offset-lg-1">
				<div class="filter-control">
					<ul>
						<li class="active">Produk Terbaru</li>

					</ul>
				</div>
				<div class="product-slider owl-carousel">
					<?php foreach ($data->result() as  $key => $data) : ?>
						<div class="product-item col-md">
							<div class="pi-pic">

								<img src="<?= base_url("./assets/upload/images/" . $data->gambar_produk) ?>" alt="<?= $data->nama_produk?>">
								<div class="sale">Sale</div>
								<ul>

									<li class="quick-view"><a href="<?php echo base_url('Product/index/' . $data->id_produk); ?>">Lihat Produk</a></li>
								</ul>
							</div>

							<div class="pi-text">
								<div class="catagory-name"><?= $data->nama_kat ?></div>
								<a href="<?php echo base_url('Product/index/' . $data->id_produk); ?>">
									<h5 style="word-break: break-all;"><?= $data->nama_produk ?></h5>
								</a>
								<div class="product-price">
									<?= "Rp " . number_format($data->harga_produk, 2, ',', '.') ?>

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
<section class="deal-of-week set-bg spad" data-setbg="<?= base_url('./assets/images/banner1.png'); ?>">
	<div class="container">
		<div class="col-lg-6 text-center">
			<div class="section-title">
				<h2>Gerbang Lamongan</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
					consectetur adipisicing elit </p>

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
							<a href="<?php echo base_url('Categories_page/index/' . $data->slug_kat); ?>"><img class="pict-category" src="<?= $data->icon_kat ?>"></a>
							<h5><a href="<?php echo base_url('Categories_page/index/' . $data->slug_kat); ?>"><?= $data->nama_kat ?></a></h5>
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
							<a href="<?php echo base_url('Categories_page/index/' . $data->slug_kat); ?>"><img class="pict-category" src="<?= $data->icon_kat ?>"></a>
							<h5><a href="<?php echo base_url('Categories_page/index/' . $data->slug_kat); ?>"><?= $data->nama_kat ?></a></h5>
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
<?php
$this->load->view('footer');
?>
