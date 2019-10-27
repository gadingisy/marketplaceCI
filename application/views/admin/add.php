<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/scss/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Karyawan</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat					
				</label>
				<div class="col-sm-10">
					<textarea name="alamat" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>