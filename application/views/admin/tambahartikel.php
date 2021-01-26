<!-- 
// if(isset($error)) {
//     echo '<p class="alert alert-warning';
//     echo $error;
//     echo '</p>'; -->

<!-- // }

// echo form_open_multipart(base_url('Produk/tambahproduk'),' class="form-horizontal"'); -->


<!DOCTYPE html>
<html lang="en">


<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->

		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-danger" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>


						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('user_admin') ?></span>
								<img class="img-profile bg-danger rounded-circle">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<?php if ($this->session->flashdata('flash')) : ?>
						<div class="row mt-3">
							<div class="col-md-6">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									Data <strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 font-weight-bold text-danger">Artikel</h1>
					</div>
				
					<!-- Content Row -->
					<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-danger">Tambah Data Artikel</h6>
							</div>
							<div class="card-body">
								<?php if (validation_errors()) : ?>
									<div class="alert alert-danger" role="alert">
										<?= validation_errors(); ?>
									</div>
								<?php endif; ?>
								<form action="" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="judul_artikel">Judul Artikel</label>
										<input type="text" class="form-control" name="judul_artikel" id="judul_artikel">
										<small class="form-text text-danger"><?= form_error('judul_artikel'); ?></small>
									</div>
									<div class="form-group">
										<label for="id_artikel_kategori" name="id_artikel_kategori" id="kategori_artikel">Kategori</label>
										<select class="form-control" name="id_artikel_kategori" id="kategori_artikel">
											<option selected>-- Pilih --</option>
											<?php
											$no = 1;
											foreach ($kategori as $data) : ?>
										
												<option value="<?= $data->id_artikel_kategori; ?>"><?= $data->nama_artikel_kategori; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="id_penjual_artikel" name="id_penjual_artikel" id="id_penjual_artikel">Penjual</label>
										<select class="form-control" name="id_penjual_artikel" id="id_penjual_artikel">
											<option selected>-- Pilih --</option>
											<?php
											$no = 1;
											foreach ($penjual as $data) : ?>
										
												<option value="<?= $data->id_penjual; ?>"><?= $data->nama_penjual; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="konten_artikel">Konten Artikel</label>
										<textarea type="text" class="form-control" name="konten_artikel" id="editor"></textarea>
										<small class="form-text text-danger"><?= form_error('konten_artikel'); ?></small>
									</div>


									<div class="form-group">
										<label for="gambar_artikel">Gambar Artikel</label>
										<input type="file" class="form-control" name="gambar_artikel" id="gambar_artikel">
										<small class="form-text text-danger"><?= form_error('gambar_artikel'); ?></small>
									</div>

									<div class="form-group">
										<label for="published" name="published" id="published">Publish</label>
										<select class="form-control" name="published" id="published">
											<option selected>-- Pilih --</option>
											<option value="publish">Publish</option>
											<option value="notpublish">Don't Publish</option>
										</select>
									</div>
									<div class="form-group">
										<label for="slug_artikel">Slug Artikel</label>
										<input type="text" class="form-control" name="slug_artikel" id="slug_artikel">
									</div>

									<button type="submit" name="tambah" class="btn btn-danger float-right">Tambah</button>
								</form>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
			</div>
