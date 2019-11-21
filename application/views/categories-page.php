<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>  <?php foreach ($produk as $data) : ?>
                   <?=$data->nama_kat?>
                    <?php endforeach; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slider.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
 


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
            <div class="container-fluid">
            <div class="page-wrapper mt-5 chiller-theme">
                <a id="show-sidebar" class="btn btn-sm btn-danger" href="#">
                  <i class="fas fa-bars"></i>
                </a>
                <nav id="sidebar" class="sidebar-wrapper mt-5 pt-3">
                  <div class="sidebar-content">
                    <div class="sidebar-brand">
                      <a href="#">Menu Lain</a>
                      <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                      </div>
                    </div>

                    <div class="sidebar-menu">
                      <ul>
                        <li class="sidebar-dropdown">
                            <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Barang</span>
                            </a>
                          <div class="sidebar-submenu">
                            <ul>
                              
                              <?php foreach ($row->result() as $key=>$data) : ?>
                              <li>
                                <a href="<?php echo base_url('Categories_page/lihatkategori/'.$data->slug_kat);?>"><?=$data->nama_kat?>
                                </a>
                              </li>
                              <?php endforeach; ?>  
                              
                             
                            </ul>
                          </div>
                        </li>
                        <li class="sidebar-dropdown">
                          <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Jasa</span>
                          </a>
                          <div class="sidebar-submenu">
                            <ul>
                           
                              <?php foreach ($row2->result() as $key=>$data) : ?>
                              <li>
                                <a href="<?php echo base_url('Categories_page/lihatkategori/'.$data->slug_kat);?>"><?=$data->nama_kat?>
                                </a>
                              </li>
                              <?php endforeach; ?>  
                            
                              
                            </ul>
                          </div>
                        </li>
                        <div class="sidebar-menu"></div>
                    </div>
                    <!-- sidebar-menu  -->
                  </div>
                </nav>
                              
                <!-- sidebar-wrapper  -->
                <div class="product-title">
                <?php foreach ($produk as $data) : ?>
                    <h1 class="font-weight bold mt-5 ml-5 pt-4"><?=$data->nama_kat?></h1>
                    <?php endforeach; ?>
                  
                </div>
                <?php foreach ($produk as $data) : ?>
                <div class="row mx-auto mt-5 justify-content-center mb-3">
                        <div class="card mr-2 ml-2 mb-4">
                            <div class="view overlay">
                                <img class="card-img-top img-thumbnail" src="<?=base_url("./assets/upload/images/".$data->gambar_produk)?>" alt="Card image cap">
                              </div>
                            <div class="card-body">
                            
                  
            
                              <h5 class="card-title"><?= $data->nama_produk ?></h5>
                              
                              <p class="card-text"><?= $data->deskripsi_produk ?></p>
                              <a href="#" class="btn btn-detailbrg">Detail</a>
                            </div>
                          </div>
                          <?php endforeach; ?>
                               
                               
                                   
                                            
                                                       
                </div>   
                <div class="row justify-content-center">
                                         <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                              </ul>     
              </div>                               
              </div>
              
            </div>
                   <!-- End Sidebar -->
                  
                   
               <!-- JQuery -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
<script type="text/javascript">
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});



</script>
</body>

</html>