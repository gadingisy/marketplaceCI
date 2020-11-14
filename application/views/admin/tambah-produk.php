<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin - Jambrong Store</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Jambrong Store</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="admin.html">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->


			<!-- Nav Item - Utilities Collapse Menu -->

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Menu
			</div>

			<!-- Nav Item - Pages Collapse Menu -->

			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="lihat-data.html">
					<i class="fas fa-fw fa-table"></i>
					<span>Lihat Data</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
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
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
								aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-danger" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
											aria-label="Search" aria-describedby="basic-addon2">
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
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
								<class>
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

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800 font-weight-bold">Tambah Produk</h1>
					</div>

					<!-- Content Row -->
					<div class="col-xl-12 col-lg-12 col-md-12 mb-4"></div>
					<div class="row justify-content-between">
						<form class="ml-3">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Produk</label>
								<input class="form-control" placeholder="Contoh : Sepatu Converse Hitam">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Deskripsi Produk</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

								<div class="input_fields_wrap mt-2" id="a">
									Detail Produk
									<div class="mt-1">
										<input type="text" name="mytext[]" placeholder="Detail Produk">
									</div>
									<button class="btn btn-danger add_field_button mt-2">Tambah Detail</button>

								</div>
								<label for="harga" class="mt-3">Harga</label>
								<input class="form-control" placeholder="Masukkan Nominal Saja. Contoh : 500000">
							</div>
							Gambar 1
							<div class="input-group mb-3">
								<div class="button-gambar">
									<button type="submit" class="btn btn-danger">Upload</button>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="Pilih Gambar">
									<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
								</div>
							</div>
							Gambar 2
							<div class="input-group mb-3">

								<div class="button-gambar">
									<button type="submit" class="btn btn-danger">Upload</button>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="Pilih Gambar">
									<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
								</div>
							</div>
							Gambar 3
							<div class="input-group mb-3">

								<div class="button-gambar">
									<button type="submit" class="btn btn-danger">Upload</button>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="Pilih Gambar">
									<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
								</div>
							</div>
							Gambar 4
							<div class="input-group mb-3 pb-3">

								<div class="button-gambar">
									<button type="submit" class="btn btn-danger">Upload</button>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="Pilih Gambar ">
									<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
								</div>
							</div>

							<button type="submit" class="btn btn-danger">Simpan</button>
						</form>
					</div>
				</div>



				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
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

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Logout</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="vendor/chart.js/Chart.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="js/demo/chart-area-demo.js"></script>
	<script src="js/demo/chart-pie-demo.js"></script>
	<script>
		$(document).ready(function () {
			var max_fields = 10; //maximum input boxes allowed
			var wrapper = $("#a"); //Fields wrapper
			var add_button = $(".add_field_button"); //Add button ID

			var x = 1; //initlal text box count
			$(add_button).click(function (e) { //on add input button click
				e.preventDefault();
				if (x < max_fields) { //max input box allowed
					x++; //text box increment
					$(wrapper).append(
						'<div><input type="text" name="mytext[]" placeholder="Deskripsi Produk"><a href="#" class="ml-2 mb-2 btn btn-primary remove_field">Hapus</a></div>'
						); //add input box
				}
			});

			$(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
				e.preventDefault();
				$(this).parent('div').remove();
				x--;
			})
		});

	</script>
</body>

</html>
