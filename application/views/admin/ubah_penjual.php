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
						<h1 class="h3 mb-0 font-weight-bold text-danger">Penjual</h1>
					</div>

					<!-- Content Row -->
					<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-danger">Edit Data Penjual</h6>
							</div>
							<div class="card-body">
							<?php if (validation_errors()) : ?>
									<div class="alert alert-danger" role="alert">
										<?= validation_errors(); ?>
									</div>
								<?php endif; ?>
								<form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id_penjual" value="<?= $data['id_penjual']; ?>">
									<div class="form-group">
										<label for="nama_penjual">Nama Penjual</label>
										<input type="text" class="form-control" name="nama_penjual" id="nama_penjual" value="<?= $data['nama_penjual']; ?>">
										<small class="form-text text-danger"><?= form_error('nama_penjual'); ?></small>
									</div>
									<div class="form-group">
										<label for="alamat_penjual">Alamat Penjual</label>
										<textarea class="form-control" name="alamat_penjual" id="alamat_penjual"><?= $data['alamat_penjual']; ?></textarea>
										<small class="form-text text-danger"><?= form_error('alamat_penjual'); ?></small>
									</div>
									<div class="form-group">
										<label for="hp_penjual">No HP Penjual</label>
										<input type="text" class="form-control" name="hp_penjual" value="<?= $data['hp_penjual']; ?>" id="hp_penjual">
										<small class="form-text text-danger"><?= form_error('hp_penjual'); ?></small>
									</div>
									<div class="form-group">
										<label for="hp_penjual">No KTP</label>
										<input type="text" class="form-control" name="no_ktp" id="no_ktp" value="<?= $data['no_ktp']; ?>">
										<small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
									</div>
									<div class="form-group">
										<label for="foto_ktp">Foto KTP</label>
										<input type="file" class="form-control" name="foto_ktp">
										<img src="<?= base_url("./assets/upload/images/" . $data['foto_ktp']) ?>" width="100px">
									</div>
									<div class="form-group">
										<label for="jk_penjual" name="jk_penjual">Jenis Kelamin</label>
										<select class="form-control" name="jk_penjual">
											<?php foreach ($jk as $jk) : ?>
												<?php if ($jk == $data['jk_penjual']) : ?>
													<option value="<?= $jk; ?>" selected><?= $jk; ?></option>
												<?php else : ?>
													<option value="<?= $jk; ?>"><?= $jk; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="facebook_penjual">Facebook Penjual</label>
										<input type="text" class="form-control" name="facebook_penjual" value="<?= $data['facebook_penjual']; ?>" id="facebook_penjual">
									</div>
									<div class="form-group">
										<label for="instagram_penjual">Instagram Penjual</label>
										<input type="text" class="form-control" name="instagram_penjual" id="instagram_penjual" value="<?= $data['instagram_penjual']; ?>">
									</div>
									<div class="form-group">
										<label for="status_penjual" name="status_penjual">Status Penjual</label>
										<select class="form-control" name="status_penjual">
											<?php foreach ($status_penjual as $status_penjual) : ?>
												<?php if ($status_penjual == $data['status_penjual']) : ?>
													<option value="<?= $status_penjual; ?>" selected><?= $status_penjual; ?></option>
												<?php else : ?>
													<option value="<?= $status_penjual; ?>"><?= $status_penjual; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>
										</select>
									</div>
									<button type="submit" name="edit" class="btn btn-danger float-right">Edit</button>
								</form>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
			</div>

		