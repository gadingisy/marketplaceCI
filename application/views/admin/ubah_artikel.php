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
								<h6 class="m-0 font-weight-bold text-danger">Edit Data Artikel</h6>
							</div>
							<div class="card-body">
							<?php if (validation_errors()) : ?>
									<div class="alert alert-danger" role="alert">
										<?= validation_errors(); ?>
									</div>
								<?php endif; ?>
							
								<form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id_artikel" value="<?= $datas->id_artikel ?>">
									<div class="form-group">
										<label for="judul_artikel">Judul Artikel</label>
										<input type="text" class="form-control" value="<?= $datas->judul_artikel; ?>" name="judul_artikel" id="judul_artikel">
										<small class="form-text text-danger"><?= form_error('judul_artikel'); ?></small>
									</div>
									<div class="form-group">
										<label for="id_artikel_kategori"  name="id_artikel_kategori" id="kategori_artikel">Kategori</label>
										<select class="form-control" name="id_artikel_kategori" id="kategori_artikel">
											<option selected>-- Pilih --</option>
											<?php
											$no = 1;
											foreach ($kategori as $data) : ?>
											<?php if ($data->id_kategori == $datas->id_penjual_kategori) : ?>		
												<option value="<?= $data->id_artikel_kategori; ?>" selected><?= $data->nama_artikel_kategori; ?></option>
											<?php else : ?>
												<option value="<?= $data->id_artikel_kategori; ?>"><?= $data->nama_artikel_kategori; ?></option>
											<?php endif; ?>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
						
										<label for="id_penjual_artikel">Penjual</label>
										<select class="form-control" name="id_penjual_artikel" id="id_penjual_artikel">
									
											<option>-- Pilih --</option>
											<?php
											$no = 1;
											
											foreach ($penjual as $penj) :  ?>
												<option value="<?= $penj->id_penjual; ?>"><?= $penj->nama_penjual; ?></option>
									
											<?php endforeach; ?>
										</select>
									</div>


									
									<div class="form-group">
										<label for="id_produk_artikel">Produk</label>
										<select class="form-control" name="id_produk_artikel" id="id_produk_artikel">
											<option selected>-- Pilih --</option>
											
										</select>
									</div>
							
									<div class="form-group">								
										<label for="konten_artikel">Konten Artikel</label>
										<textarea type="text" class="form-control" name="konten_artikel" id="editor" value="<?= $datas->konten_artikel ?>"><?= $datas->konten_artikel ?></textarea>
									</div>


									<div class="form-group">
									<label for="gambar_artikel">Gambar Artikel</label>
										<input type="file" class="form-control" name="gambar_artikel">
									</div>

									<div class="form-group">
										<label for="published" value="<?= $datas->published ?>"  name="published" id="published">Publish</label>
										<select class="form-control" name="published" id="published">
											<option selected>-- Pilih --</option>								
																						
											<?php
											switch($datas->published) {
											case "publish": ?> <option value="publish" selected>Publish</option><option value="notpublish">Don't Publish</option> <?php break; ?>
											<?php case "notpublish": ?> <option value="publish" >Publish</option><option value="notpublish" selected>Don't Publish</option> <?php break; ?>
											<?php default: ?> <option value="publish">Publish</option><option value="notpublish">Don't Publish</option> <?php break; ?>
											
											<?php } ?>
											
										</select>
									</div>
									<div class="form-group">
										<label for="slug_artikel">Slug Artikel</label>
										<input type="text" value="<?= $datas->slug_artikel ?>"  class="form-control" name="slug_artikel" id="slug_artikel">
									</div>
									<button type="submit" name="edit" class="btn btn-danger float-right">Edit</button>
								</form>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
			</div>
			<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto ">
            <span>Copyright &copy; G-dunk</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
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
  <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/datatables-demo.js"></script>

	
  <script>
	initSample();
</script>
<script>
$("#id_penjual_artikel").on('change', function(){
	var id = $(this).children("option:selected").val();
 $.ajax({
	 method: "POST",
	 url: "<?php echo site_url();?>Overview/getIDitems",
	 data: {id: id},
	 dataType:'json',
	 cache:false,
	 async:false,
	 success: 
		  function(data){
		   
			var html = '';
						var i;
						if(data.length){
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_produk+'>'+data[i].nama_produk+'</option>';
						}
						} else {
							html += '<option>Tidak Ada Produk</option>';
						}
						$('#id_produk_artikel').html(html);
					
		  }
	  });
 return false;
});
</script>

		