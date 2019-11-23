<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.jpg">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php foreach ($item as $data) : ?><?= $data->nama_produk?><?php endforeach; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Font Awesome -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet"  type="text/css" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>" >
  <link rel="stylesheet"  type="text/css" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>" >
  <link type="text/css" href="<?php echo base_url('./assets/css/slider.css');?>" rel="stylesheet">

</head>


<body>
    <!-- NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBARNAVBAR NAVBAR NAVBARNAVBAR -->
    <header>
                    
                    <nav class="navbar navbar-expand-md navbar-light fixed-top"  style="background-color:#ffffff;">
                      <div class="container">
                      <a class="navbar-brand " href="#">
                        <img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="logo" style="width:40px;">
                     </a>      
                          <a href="<?php echo site_url('Index') ?>" class="navbar-brand mr-3" style="color:red;">Gerbang Lamongan</a>
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                              <div class="collapse navbar-collapse" id="navbarCollapse">
                              <div class="navbar-nav navmbrong" style="color:red;">
                                  <a href="<?= site_url('Index')?>" class="nav-item nav-link active"style="color:red;">Home</a>
                                  <a href="<?= site_url('Categories_page')?>" class="nav-item nav-link active"style="color:red;">Categories</a>
                              </div>
                            
                                  <div class="navbar-nav ml-auto">
                                      <form class="form-inline" action="#">
                                        <input type="search" placeholder="Search">
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-search"></i></button>
                                      </form>
                                    
                                  </div>
                              </div>
                            </div>
                  </nav>
            
            </header>  
<div class="container">
        <div class="row">
          <div class="col-md-3 mt-5 pt-5">  
         
        </div>
        </div>
      
        <?php foreach ($item as $data) : ?>
        <h1 class="mt-1 pt-1 judul-text font-weight-bold " style="color:red;"><?=$data->nama_produk?></h1>
        <h6 class="pb-2">Penjual : <?=$data->nama_penjual?></h6> 
       
      </div>
      
        <!-- Portfolio Item Row -->
 <div class="container">
        <div class="row">
          <div class="col-md-6 ">
              <div class="outer">
                  <div id="big" class="owl-carousel owl-theme mb-2">
                    <div class="item">
                          <img src="<?=base_url("./assets/upload/images/".$data->gambar_produk); ?>">
                    </div>
                    <div class="item">
                          <img src="<?=base_url("./assets/upload/images/".$data->thumb_produk1); ?>">
                    </div>
                    <div class="item">
                          <img src="<?=base_url("./assets/upload/images/".$data->thumb_produk2); ?>">
                    </div>
                    <div class="item">
                        <img src="<?=base_url("./assets/upload/images/".$data->thumb_produk3); ?>">
                  </div>
                  </div>

                   <div id="thumbs" class="owl-carousel owl-theme">
                    <div class="item mx-auto">
                          <img src="<?=base_url("./assets/upload/images/".$data->gambar_produk); ?>">
                    </div>
                    <div class="item mx-auto">
                          <img src="<?=base_url("./assets/upload/images/".$data->thumb_produk1); ?>">
                    </div>
                    <div class="item mx-auto">
                          <img src="<?=base_url("./assets/upload/images/".$data->thumb_produk2); ?>">
                    </div>
                    <div class="item mx-auto  ">
                          <img src="<?=base_url("./assets/upload/images/".$data->thumb_produk3); ?>">
                    </div>
                   </div>
              </div>                      
        </div>
                    <div class="col-md-6 text-description pl-4 bg-light">
             
                                    <h3 class="my-3 font-weight-bold" style="color:red;">Deskripsi Produk</h3>
                                    <p> <?=$data->deskripsi_produk?></p>
                                    <h3 class="font-weight-bold" style="color:red;">Harga</h3>
                                    <h5 class="font-weight-bold"><?= "Rp " . number_format($data->harga_produk,2,',','.') ?></h5>
                                                          
                                    <h3 class="font-weight-bold" style="color:red;">Jumlah Produk</h3>
                                    <h5 class="font-weight-bold"><?= $data->jumlah_produk ?></h5>
                                    
                                    <div class="d-flex">
                                      <div>
                                      <h3 class="my-3 mt-4 font-weight-bold" style="color:red;">Detail Produk</h3>
                                      <ul>
                                      <li><?= $data->ukuran_produk ?></li>
                                    
                                     

                                    </ul>
                                      </div>
                                      </div>  
                                      <div class="ml-auto">

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#kontak">
                                      Contact
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="kontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Kontak Pembeli</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                           <p class="font-weight-bold">WA : 0<?= $data->hp_penjual ?></p>
                                           <p class="font-weight-bold">Facebook : <?= $data->facebook_penjual?></p>
                                           <p class="font-weight-bold">Instagram : <?= $data->instagram_penjual ?></p>
                                           <!-- <p class="font-weight-bold">Description</p>
                                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, molestias placeat quod dolorum eaque reprehenderit atque, alias asperiores magni nobis incidunt ipsam quibusdam! Aspernatur, repellendus.</p> -->
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                   </div>   
                      
          </div>
        </div>
 </div>
 <?php endforeach; ?>  
<section class="other-product">
    
  <div class="container-fluid bg-light pb-1">
    <h3 class="mt-5 pt-3 text-description font-weight-bold"><div class="lines" data-text="Barang Yang Lain. . ."></div></h3>
    <div class="row mx-auto justify-content-center mb-2 pt-3">     
    <?php foreach ($randomdata as $data) : ?>   
      <div class="card mr-2 ml-2 mb-4">
          <img class="card-img-top"  src="<?=base_url("./assets/upload/images/".$data->gambar_produk)?>" alt="<?= $data->nama_produk ?>">
          <div class="card-body">
              <h4 class="card-title font-weight-bold text-danger"><?= $data->nama_produk ?></h4>
              <h6 class="card-subtitle mb-2 text-muted">Penjual : <?= $data->nama_penjual ?></h6>
              <p class="card-text"><?= $data->deskripsi_produk ?></p>
              <a href="<?php echo base_url('Product/produk/'.$data->id_produk);?>" class="btn btn-detailbrg">Detail</a>
          </div>
        </div>
    <?php endforeach; ?>    
    
        </div>
        </div>
      </div>
</section>
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
                    
  
             <!-- JQuery -->
         
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
          <!-- Bootstrap tooltips -->
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
          <!-- Bootstrap core JavaScript -->
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <!-- MDB core JavaScript -->
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
          <script type="text/javascript" language="JavaScript" src="<?php echo base_url();?>assets/js/product.js"></script>
        
        </body>
          
          </html>
