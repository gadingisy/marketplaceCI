<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <title>Gerbang Lamongan - Tempat Menjual Barang Terbaik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Font Awesome -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

 
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <link type="text/css" href="<?php echo base_url('./assets/css/registrasi.css');?>" rel="stylesheet">
</head>

<body>
    <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->
<header>
    
    <nav class="navbar navbar-expand-md navbar-light  " style="background-color:#ffffff;">
        <div class="container">
                <a class="navbar-brand " href="#">
                        <img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="logo" style="width:40px;">
                </a>    
            <a href="<?php echo site_url('Index') ?>" class="navbar-brand mr-3" style="color:red;">GERBANG LAMONGAN</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav navmbrong">
                  <a href="<?= site_url('Index')?>" class="nav-item nav-link active"style="color:red;">Home</a>
                  <a href="<?= site_url('Categories_page')?>" class="nav-item nav-link active"style="color:red;">Categories</a>
                  
                </div>
              
                     <div class="navbar-nav ml-auto">
                        
                     <form class="form-inline ml-3" action="#">
                          <input type="search" placeholder="Search">
                          <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                     </div>
                </div>
              </div>
    </nav>

</header>  
  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->
  <div class="container">
  <div class="col-12 ">
<div class="row mt-3 mb-5 justify-content-center">
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
        <div class="card col-8">
            <div class="card-header">
            Form Daftar
            </div>
            <div class="card-body">
    <?php if( validation_errors() ) : ?>
          <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?> 
          </div>
     <?php endif; ?>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_penjual">Nama</label>
            <input type="text" class="form-control" name="nama_penjual" id="nama_penjual"> 
            <small class="form-text text-danger"><?= form_error('nama_penjual'); ?></small>
        </div>    
        <div class="form-group">
            <label for="alamat_penjual">Alamat</label>
            <textarea class="form-control" name="alamat_penjual" id="alamat_penjual"></textarea>
            <small class="form-text text-danger"><?= form_error('alamat_penjual'); ?></small>
        </div>    
        
        <div class="form-group">
            <label for="hp_penjual">No HP</label>
           
            <input type="text" class="form-control" name="hp_penjual"  id="hp_penjual"> 
            <small class="form-text text-danger"><?= form_error('hp_penjual'); ?></small>
        </div>  
        <div class="form-group">
            <label for="hp_penjual">No KTP</label>
         
            <input type="text" class="form-control" name="no_ktp"  id="no_ktp"> 
            <small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
        </div>  
        <div class="form-group">
            <label for="foto_ktp">Foto KTP</label>
            <input type="file" class="form-control" name="foto_ktp"> 
          
        </div>
        <div class="form-group">
        <label for="jk_penjual" name="jk_penjual" id="hp_penjual">Jenis Kelamin</label>
        <select class="form-control" name="jk_penjual" id="hp_penjual">
            <option selected>-- Pilih --</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
         </div>
         <div class="form-group">
            <label for="facebook_penjual">Facebook</label>
            <input type="text" class="form-control" name="facebook_penjual"  id="facebook_penjual"> 
        </div>  
        
          
            
        <div class="form-group">
            <label for="instagram_penjual">Instagram</label>
            <input type="text" class="form-control" name="instagram_penjual"  id="instagram_penjual"> 
        </div>
        <button type="submit" name="tambah" class="btn btn-danger float-right">Submit</button>  
        </div>
    </div>
</div>
</div>
  </div>
<!-- BODY BODY BODY BODY BODYBODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY-->

<!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
<!-- BAWAH     --> 
<section class="jambrong-footer">
  <div class="container-fluid" >
    <div class="row justify-content-center bg-dark pt-3">
      <div class="col-md-2 white-text" >
        <h4 class="font-weight-bold">Address</h4>
        <div class="text-left">
        <p>Apartemenmu</p>
        <p>Surabaya</p>
        <p>Jawa Timur</p>
        <p>Indonesia</p>
        <p>60421</p>
        </div>
        </div>
        <div class="col-md-3 white-text">
            <h4 class="font-weight-bold">Terms and Policy</h4>
        </div>
                <div class="col-md-3 white-text">
                  <div class="social-media">
                <h4 class="font-weight-bold text-left mt-1 mb-1 d-inline-block text-truncate">Social Media</h4>
                <p><i class="fab fa-instagram fa-2x "><span>@Jambrong_Store</span></i></p>
                <p><i class="fab fa-facebook fa-2x" ><span>Jambrong Store</span></i></p>
                <p><i class="fab fa-whatsapp  fa-2x "><span>+6283213212</span></i></p>    
              </div>
          </div>
          </div>
       </div>
       <div class="copyright bg-dark  white-text">
         <div class="col-md-12 py-1 ">
           <h6 class="text-center mt-2">Copyright <i class="far fa-copyright fa-1x"></i> by G-Dunk</h6>
           <h6><p class="text-center mt-1 pt-2">2019</h6></p>
         </div>
       </div>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 1200
    })
  });
</script>
   <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
</body>

</html>