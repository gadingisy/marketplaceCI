<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gerbang Lamongan - Tempat Menjual Barang Terbaik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Font Awesome -->

 <link href="<?php echo base_url('assets/css/stylesku.css');?>" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

 
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->  <!-- ATAS -->
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
               
                    <a href="#" class="nav-item nav-link active" style="color:red;">Home</a>
                    <a href="<?php echo site_url('Categories_page') ?>" class="nav-item nav-link"style="color:red;">Categories</a>
                    <a href="#" class="nav-item nav-link"style="color:red;">About Us</a>
                    
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
<section>

  <div class="row">
    <div class="col-lg-12 mt-4 pt-4">
          <!--Carousel Wrapper-->
          <div id="carouselfull" class="carousel slide carousel-fade" data-ride="carousel">
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#carouselfull" data-slide-to="0" class="active"></li>
                <li data-target="#carouselfull" data-slide-to="1"></li>
                <li data-target="#carouselfull" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/sepatu3.png"  alt="First slide" >
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <img class="d-block w-100" class="img-responsive" src="<?php echo base_url(); ?>assets/images/3.jpg"
                    alt="Second slide">
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                  <img class="d-block w-100" class="img-responsive" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg"
                    alt="Third slide">
                </div>
                <!--/Third slide-->
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carouselfull" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselfull" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
   
  </div>
</div>
</section>
<!-- BODY BODY BODY BODY BODYBODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY BODY-->
<section>
    <h4 class="text-center pt-2 font-weight-bold mt-4" style="color:red;">PRODUK TERBARU</h4><br>
  <div class="container-fluid bg-light p-3">
        <div class="col-md-12">
    <!-- Card -->
          <div class="row mx-auto justify-content-center mb-4">        
              <div class="card mr-2 ml-2 mb-4" style="width: 18rem;">
                  <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Sepatu</h5>
                      <p class="card-text">Sepatu ini sangat mantul dipakai melarikan istri orang gan.</p>
                      <a href="#" class="btn btn-detailbrg">Detail</a>
                  </div>
                </div>
                <div class="card mr-2 ml-2 mb-4" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu</h5>
                        <p class="card-text">Sepatu ini sangat mantul dipakai melarikan istri orang gan.</p>
                        <a href="#" class="btn btn-detailbrg">Detail</a>
                    </div>
                  </div>
                  <div class="card mr-2 ml-2 mb-4" style="width: 18rem;">
                      <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Sepatu</h5>
                          <p class="card-text">Sepatu ini sangat mantul dipakai melarikan istri orang gan.</p>
                          <a href="#" class="btn btn-detailbrg">Detail</a>
                      </div>
                    </div>
                
                      
              <!-- Card -->
            </div>

            <!-- CARD KEDUA -->
            <div class="row mx-auto mt-3 justify-content-center mb-4">
                <div class="card mr-2 ml-2 mb-4" style="width: 18rem;">
                    <div class="view overlay">
                        <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg" alt="Card image cap">
                        
                      </div>
                    <div class="card-body">
                      <h5 class="card-title">Sepatu</h5>
                      <p class="card-text">Sepatu ini sangat mantul dipakai melarikan istri orang gan.</p>
                      <a href="#" class="btn btn-detailbrg">Detail</a>
                    </div>
                  </div>
               
                    <div class="card mr-2 ml-2 mb-4" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu</h5>
                            <p class="card-text">Sepatu ini sangat mantul dipakai melarikan istri orang gan.</p>
                            <a href="#" class="btn btn-detailbrg">Detail</a>
                        </div>
                      </div>
                      <div class="card mr-2 ml-2 mb-4" style="width: 18rem;">
                          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/sepatu1.jpg" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title">Sepatu</h5>
                              <p class="card-text">Sepatu ini sangat mantul dipakai melarikan istri orang gan.</p>
                              <a href="#" class="btn btn-detailbrg">Detail</a>
                          </div>
                        </div>
                  
             
  <!-- Card -->
  </div>
  
   

</section>
<!-- NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD NISORE CARD -->
<section class="jambrong-features">
  <div class="container-fluid " style="background-color: #D4151B">
    <div class="row justify-content-center mx-auto">
      <div class="col-md-3 feature-box text-center">
        <i class="fas fa-thumbs-up fa-3x mb-3 white-text"></i>
          <div class="feature-text">
              <h4 class="font-weight-bold"> 100% Barang Terjamin</h4>
               <p> Barang yang ada pada toko kami adalah barang pilihan</p>  
          </div>
        </div>
           <div class="col-md-3 feature-box text-center">
            <i class="fas fa-dollar-sign fa-3x mb-3 white-text"></i>
            <div class="feature-text">
                <h4 class="font-weight-bold ">Harga Murah, Kualitas Mantap</h4>
                 <p class=""> Barang yang ada pada toko kami adalah barang pilihan</p>  
            </div>
            </div>
            <div class="col-md-3 feature-box text-center">
                <i class="fas fa-people-carry fa-3x mb-3 white-text"></i>
                <div class="feature-text">
                    <h4 class="font-weight-bold">Barang dijaga dengan baik sampai ke konsumen</h4>
                     <p class=""> Barang yang ada pada toko kami adalah barang pilihan</p>  
                </div>
                </div>
          
           
     </div>       
    </div>
    </div>

</section>
<!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
<!-- BAWAH     --> 
<section class="jambrong-footer">
  <div class="container-fluid">
    <div class="row justify-content-center bg-dark pt-3">
      <div class="col-md-2 white-text">
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
                <h4 class="font-weight-bold">Categories</h4>
                <div class="text-left">
                <p>Baju Pria</p>
                <p>Baju Wanita</p>
                <p>Celana Pria</p>
                <p>Topi</p>
                <p>Dompet</p>
                </div>
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