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
						<h1 class="h3 mb-0 font-weight-bold text-danger">Produk</h1>
					</div>

					<!-- Content Row -->
					<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-danger">Tambah Data Produk</h6>
							</div>
							<div class="card-body">
								<form method="post" action="<?php echo base_url('Overview/process'); ?>" enctype="multipart/form-data">
									<?php if ($this->session->flashdata('error')) : ?>
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="alert alert-danger alert-dismissible fade show" role="alert">
													Data <strong> Gagal </strong> <?= $this->session->flashdata('error'); ?>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
											</div>
										</div>
									<?php endif; ?>

									<div class="form-group">

										<label for="nama_produk">Nama Produk</label>
										<input type="hidden" name="id_produk" value="<?= $row->id_produk ?>">
										<input type="text" class="form-control" name="nama_produk" value="<?= $row->nama_produk ?>" required>

									</div>

									<div class="form-group">
										<label for="desk_produk">Deskripsi Produk</label>
										<textarea type="text" class="form-control" name="deskripsi_produk" id="editor" value="<?= $row->deskripsi_produk ?>"><?= $row->deskripsi_produk ?></textarea>


									</div>

									<div class="form-group">
										<label for="nama_kat">Kategori</label>
										<select name="kategori" class="form-control" required>
											<option value="">
												<--Pilih-->
											</option>
											<?php foreach ($kategori->result() as $key => $data) { ?>
												<option value="<?= $data->id_kat ?>"><?= $data->nama_kat ?></option>

											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label for="nama_penjual">Penjual</label>
										<select name="penjual" class="form-control" required>
											<option value="">
												<--Pilih-->
											</option>
											<?php foreach ($penjual->result() as $key => $data) { ?>
												<option value="<?= $data->id_penjual ?>" <?= set_select('penjual', '$data->nama_penjual'); ?>><?= $data->nama_penjual ?>
												</option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label for="berat_produk">Berat Produk*</label>
										<input type="text" class="form-control" name="berat_produk" value="<?= $row->berat_produk ?>">
										
										
										<span class="badge badge-secondary mt-2 text-wrap">Isikan juga satuan barang, misal : 200gr, 1kg, 1ton dan lain-lain.</span>
										
									
									</div>
									<div class="form-group">
										<label for="ukuran_produk">Ukuran Produk</label>
										<input type="text" class="form-control" name="ukuran_produk" value="<?= $row->ukuran_produk ?>">

									</div>
									<div class="form-group">
										<label for="harga_produk">Harga Produk</label>
										<input type="text" id="rupiah" class="form-control" name="harga_produk" value="<?= $row->harga_produk ?>">

									</div>

									<div class="form-group">
										<label for="gambar_produk">Gambar Produk</label>
										<input type="file" class="form-control" name="gambar_produk" value="<?= $row->gambar_produk ?>">

									</div>

									<div class="form-group">
										<label for="gambar_produk">Thumb Produk 1</label>
										<input type="file" class="form-control" name="thumb_produk1" value="<?= $row->thumb_produk1 ?>">

									</div>

									<div class="form-group">
										<label for="gambar_produk">Thumb Produk 2</label>
										<input type="file" class="form-control" name="thumb_produk2" value="<?= $row->thumb_produk2 ?>">

									</div>

									<div class="form-group">
										<label for="gambar_produk">Thumb Produk 3 </label>
										<input type="file" class="form-control" name="thumb_produk3" value="<?= $row->thumb_produk3 ?>">

									</div>



									<div class="form-group">
										<label for="slug_produk">Slug Produk</label>
										<input type="text" class="form-control" name="slug_produk" value="<?= $row->slug_produk ?>">

									</div>

									<button type="submit" name="<?= $page ?>" class="btn btn-danger btn-lg float-right"><i class="fas fa-save"> Submit</i></button>
								</form>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
			</div>
