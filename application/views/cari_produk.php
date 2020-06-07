<!DOCTYPE html>
<html lang="zxx">

<head>
	
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">

    <title>	<?= $data2->nama_kat; ?></title>
   <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<!-- Css Styles -->

    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/font-awesome.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/themify-icons.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/elegant-icons.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/owl.carousel.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/nice-select.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/jquery-ui.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/slicknav.min.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css') ?>" type="text/css">
	
	
</head>

<body>
    <!-- Page Preloder -->

    <!-- Header Section Begin -->
    <header class="header-section">
       
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="<?php echo site_url('Index') ?>">
                                <img src="<?= base_url('./assets/images/logo.png'); ?>" class="logo_site" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 mb-5 mt-4">
                        <div class="advanced-search">

                            <div class="input-group">
                                
                                <input type="text" placeholder="Apa yang anda butuhkan?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
             
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="<?= site_url('Index'); ?>">Home</a></li>
                     
                        <li><a href="#">Barang</a>
                            <ul class="dropdown">
							
                            </ul>
                        </li>
                        <li><a href="#">Jasa</a>
                            <ul class="dropdown">
						

							<li><a href=""><?=$data->nama_kat?></a></li>

							
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

  <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<div class="breadcrumb-text">
				
						<a href="<?= site_url('Index'); ?>"><i class="fa fa-home"></i> Home</a>
						
					
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Harga</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                   Min: &nbsp; <input type="text" id="minamount">
                                   Max:  <br> <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="0" data-max="10000">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                  
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Urutkan Berdasarkan...</option>
                                    </select>
						
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
				
                    <div class="col-lg-4 col-sm-6">
						
                        <div class="product-item col-md">
                            <div class="pi-pic">							
                                <img src=""  alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a href="">Lihat Produk</a></li>
																</ul>
														</div>				
                           		 <div class="pi-text">
                                        <div class="catagory-name">Nama</div>		
                              	  <a href="">
                                    <h5 style="word-break: break-all;">Nama</h5>
                                    </a>
                                <div class="product-price">	
								<p>5000</p>
                                </div>
                            </div>
						</div>
						
					</div>
			
                           
						</div>
						<div class="pagination p1 justify-content-center">
						<ul>
				
						</ul>
						</div>
						
				
				
					</div>
					
				</div>
                    <!-- <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
	
							 <?php	
$this->load->view('footer');
?>
