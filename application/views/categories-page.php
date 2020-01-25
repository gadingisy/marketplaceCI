<?php	
$this->load->view('header');
?>
  <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
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
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
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
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
										
               
											
													<?php foreach ($produk as $data) : ?>
                            <div class="col-lg-4 col-sm-6">
                                  <div class="product-item col-md">
                            <div class="pi-pic">
															
                                <img src="<?=base_url("./assets/upload/images/".$data->gambar_produk)?>"  alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a href="<?php echo base_url('Product/produk/'.$data->id_produk);?>">Lihat Produk</a></li>
																</ul>
														</div>				
                           		 <div class="pi-text">
                                        <div class="catagory-name"><?= $data->nama_kat ?></div>		
                              	  <a href="<?php echo base_url('Product/produk/'.$data->id_produk);?>">
                                    <h5 style="word-break: break-all;"><?= $data->nama_produk ?></h5>
                                    </a>
                                <div class="product-price">
															<?= "Rp " . number_format($data->harga_produk,2,',','.') ?>
                                </div>
                            </div>
                        </div>
                            </div>
														<?php endforeach; ?>
                           
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
