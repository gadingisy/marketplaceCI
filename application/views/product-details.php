<?php
$title = 'KMK';
$this->load->view('header');
?>
 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
		</div>
 
		<!-- Breadcrumb Section Begin -->
		<?php foreach ($item as $data) : ?>
		<section class="product-shop spad page-details">
                <div class="col-lg-12">
                    <div class="row mx-3">
                        <div class="col-lg-6">
														<div style="margin-bottom: 10px;">
											
                                <img class="product-big-img" style="min-width:100%;" src="<?=base_url("./assets/upload/images/".$data->gambar_produk); ?>" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="<?=base_url("./assets/upload/images/".$data->gambar_produk); ?>"><img
																		src="<?=base_url("./assets/upload/images/".$data->gambar_produk); ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="<?=base_url("./assets/upload/images/".$data->thumb_produk1); ?>"><img
                                            src="<?=base_url("./assets/upload/images/".$data->thumb_produk1); ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="<?=base_url("./assets/upload/images/".$data->thumb_produk2); ?>"><img
                                            src="<?=base_url("./assets/upload/images/".$data->thumb_produk2); ?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="<?=base_url("./assets/upload/images/".$data->thumb_produk3); ?>"><img
                                            src="<?=base_url("./assets/upload/images/".$data->thumb_produk3); ?>" alt=""></div>
                                </div>
                            </div>
												</div>
									
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span><?= $data->nama_penjual ?></span>
                                    <h3><?= $data->nama_produk ?></h3>
                                  
                                </div>
                               
                                <div class="pd-desc">
                         
                                    <h4><?= "Rp " . number_format($data->harga_produk,2,',','.') ?></h4>
                                </div>
                             
                              
                                <div class="quantity">
                                  
                                  
																		<button type="button" class="btn primary-btn pd-cart" data-toggle="modal" data-target="#kontak">
                                      Contact
                                    </button>

                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: <?= $data->nama_kat ?></li>
                               
                                </ul>
                                <div class="pd-share">
                                   
                                    <div class="pd-social">
																	
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESKRIPSI</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">SPESIFIKASI</a>
                                </li>
                             
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5>Deskripsi</h5>
                                                <?= $data->deskripsi_produk ?>
                                               
																						</div>
																				
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                    
                                            <tr>
                                                <td class="p-catagory">Harga</td>
                                                <td>
                                                    <div class="p-price"><?= "Rp " . number_format($data->harga_produk,2,',','.') ?></div>
                                                </td>
                                            </tr>
                                           
                                           
                                            <tr>
                                                <td class="p-catagory">Berat</td>
                                                <td>
                                                    <div class="p-weight"><?= $data->berat_produk?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size"><?= $data->ukuran_produk?></div>
                                                </td>
                                            </tr>
                                           
                                           
                                        </table>
                                    </div>
                                </div>
                              
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
		<?php endforeach; ?>   <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
						<?php foreach ($randomdata as $data) : ?>   
                <div class="col-lg-3 col-sm-6">
							
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
    </div>
    <!-- Related Products Section End -->

<?php
$this->load->view('footer');
?>
