<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <title>Gerbang Lamongan - Tempat Menjual Barang Terbaik</title>

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
                                <img src="<?= base_url('./assets/images/logo.png'); ?>" class="w-50" alt="">
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
                        <li class="active"><a href="./index.html">Home</a></li>
                     
                        <li><a href="#">Barang</a>
                            <ul class="dropdown">
							<?php foreach ($row->result() as $key=>$data) : ?>

                                <li><a href="<?php echo base_url('Categories_page/index/'.$data->slug_kat);?>"><?=$data->nama_kat?></a></li>
                            
								<?php endforeach; ?>   
                            </ul>
                        </li>
                        <li><a href="#">Jasa</a>
                            <ul class="dropdown">
							<?php foreach ($row2->result() as $key=>$data) : ?>

							<li><a href="<?php echo base_url('Categories_page/index/'.$data->slug_kat);?>"><?=$data->nama_kat?></a></li>

							<?php endforeach; ?>   
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
