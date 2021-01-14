<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<!-- Page Wrapper -->


	<!-- Sidebar -->
	<div id="wrapper">
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
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small"
											placeholder="Search for..." aria-label="Search"
											aria-describedby="basic-addon2">
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
							<a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal"
								role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span
									class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('user_admin'); ?></span>
								<img class="img-profile bg-danger rounded-circle">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">

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
					<?php if ($this->session->flashdata('flash')) :?>
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
						<h1 class="h3 mb-0 font-weight-bold text-danger">Manajemen Website</h1>
					</div>

					<!-- Content Row -->
					<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-danger">Ganti Iklan 1</h6>
							</div>
							<div class="card-body">
								<div class="row justify-content-between">
									<div class="col-md-12">

										<form method="post"
											action="<?php echo base_url('Manajemenwebsite/uploadbanner'); ?>"
											enctype="multipart/form-data">
											<?php if ($this->session->flashdata('error')) :?>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="alert alert-danger alert-dismissible fade show"
														role="alert">
														Data <strong> Gagal </strong>
														<?= $this->session->flashdata('error'); ?>
														<button type="button" class="close" data-dismiss="alert"
															aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
												</div>
											</div>
											<?php endif; ?>
											<span class="badge badge-secondary mt-1 mb-3">Pastikan foto berukuran dengan <span
													class="font-weight-bold"> HEIGHT : 620px </span></span>
											<div class="form-group">
												<label for="foto_ktp">Iklan</label>
												<input type="file" class="form-control" name="gambar_iklan1">

											</div>
											<div class="form-group">
												<label for="nama_penjual">Alt Gambar Iklan 1</label>
												<input type="text" class="form-control" name="alt_iklan1" id="alt_iklan1">
												<small class="form-text text-danger"></small>
											</div>

											<div class="form-group">
											<input type="hidden" class="form-control" name="tipe_iklan" value="iklan1">
											</div>

											<button type="submit" name="uploadbanner"
												class="btn btn-danger mt-3">Simpan</button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-danger">Data Banner</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="tabel_banner" width="100%" cellspacing="0">
										<thead>

											<tr>
												
												<th>Gambar</th>
												<th>Alt Iklan 1</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
									
										<?php
										
										$no=1;
										foreach ($row->result() as $key => $data) :;?>
									
									<tr>
										<td><img src="<?=base_url("./assets/upload/images/".$data->gambar_iklan1)?>" width="100px" class="mb-3"></td>
										<td><?= $data->alt_iklan1 ?></td>
										<?php if ($data->published != 'publish'){ ?>
										<td><a href="<?= base_url(); ?>Manajemenwebsite/publishiklan1/<?= $data->id_iklan1 ?>" class='btn btn-sm btn-success mb-2'><i class="fas fa-check mr-2"></i>Publish</a></td>
										
										<?php } else {?>
										<td><a href="<?= base_url(); ?>Manajemenwebsite/dontpublishiklan1/<?= $data->id_iklan1 ?>" class='btn btn-sm btn-warning mb-2'><i class="fas fa-times mr-2"></i>Batal</a></td>

										<?php }?>
										<td>
										<a href="<?= base_url(); ?>Manajemenwebsite/hapusiklan1/<?= $data->id_iklan1 ?>" class='btn btn-sm btn-danger' onclick="return confirm('Yakin?');" ><i class="fas fa-times-circle mr-2"></i>Hapus</a>
										</td>
									</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>

			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; G-dunk</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<?php $this->load->view("admin/_partials/modal.php") ?>

	<!-- Bootstrap core JavaScript-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->


	<!-- Core plugin JavaScript-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.min.js">
	</script>

	<!-- Page level custom scripts -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/datatables-demo.js"></script>
	
<script type="text/javascript">
</script>
</body>
</html>
