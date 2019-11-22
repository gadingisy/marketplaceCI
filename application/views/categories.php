<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Font Awesome -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

 
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="<?php echo base_url('./assets/css/stylesku.css');?>" rel="stylesheet">
</head>



<body>
    <!-- NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBARNAVBAR NAVBAR NAVBARNAVBAR -->
        <header>
                    
        <nav class="navbar navbar-expand-md navbar-light fixed-top " style="background-color:#ffffff;">
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

            <section class="jambrong-kategori mt-5 pt-4">
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
   <div class="kategori-section">
   <a href="<?php echo site_url('Categories_page') ?>"><h3 class="font-weight-bold text-center kategori2 text-danger mt-3">KATEGORI</h3></a> 


                <div class="row">
               
                  <div class="col-md-12 border mb-5">
                       
                        <p>
                        <h1 class="text-center font-weight-bold border-bottom pb-3 text-danger">Barang</h1>
                        </p>
                        <div class="row mb-4">
                          <div class="barang mr-2 ml-2"> 
                            <?php foreach ($row->result() as $key=>$data) : ?>
                              <a class=" text-danger listkategori" href="<?php echo base_url('Categories_page/kategori/'.$data->slug_kat);?>"><span><?=$data->nama_kat?></span></a>
                                            
                            <?php endforeach; ?>    
                          </div>
                        
                        </div>
                        <p>
                            <h1 class="text-center font-weight-bold border-bottom border-top  text-danger py-3 mb-3">Jasa</h1>
                        </p>
                        <div class="row">
                          <div class="barang mr-2 ml-2 mb-5"> 
                                <?php foreach ($row2->result() as $key=>$data) : ?>
                                <a class=" text-danger listkategori" href="<?php echo base_url('Categories_page/kategori/'.$data->slug_kat);?>"><span><?=$data->nama_kat?></span></a>
                                  
                                    <?php endforeach; ?>    
                           
                        </div>
                    </div>
                  </div>
            </div>
            </div>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
</body>
    </html>