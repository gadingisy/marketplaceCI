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
<div class="row mt-5 mb-3 justify-content-center">
<?php if ($this->session->flashdata('flash')) :?>
              <div class="row mt-3">
             
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
            
                </div>
              </div>
          <?php endif; ?>
       
    </div>
    <div class="row justify-content-center">

    <h3 class="text-danger font-weight-bold">Tunggu 5 Detik, Kami akan mengirimkan Anda ke Homepage.</h3>
    </div>
    <div class="row" style="margin-top:400px;">
    <div class="dl">
  <div class="dl__container">
    <div class="dl__corner--top"></div>
    <div class="dl__corner--bottom"></div>
  </div>
  <div class="dl__square"></div>
</div>
    </div>
</div>
</div>

<!-- BODY BODY BODY BODY BODYBODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY-->

<!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
<!-- BAWAH     --> 
<script>
  setTimeout(function(){
            window.location.href = '<?= base_url('Index'); ?>';
         }, 5000);
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