<!-- 
// if(isset($error)) {
//     echo '<p class="alert alert-warning';
//     echo $error;
//     echo '</p>'; -->
    
<!-- // }

// echo form_open_multipart(base_url('Produk/tambahproduk'),' class="form-horizontal"'); -->





<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-8 col-xs-8">
      
            <div class="card">
                <div class="card-header">
                <?= $title ?>
                </div>
                <div class="card-body">
        
             <form method="post" action="<?php echo base_url('Produk/process'); ?>" enctype="multipart/form-data">
             <?php if ($this->session->flashdata('error')) :?>
              <div class="row mt-3">
                <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data <strong> Gagal </strong> <?= $this->session->flashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>
          <?php endif; ?>
        
            <div class="form-group">

                <label for="nama_produk">Nama Produk</label>
                <input type="hidden" name="id_produk" value="<?=$row->id_produk?>">
                <input type="text" class="form-control" name="nama_produk" value="<?=$row->nama_produk?>" required> 
       
            </div>  
           
            <div class="form-group">
                <label for="desk_produk">Deskripsi Produk</label>
               <textarea type="text" class="form-control" name="deskripsi_produk" id="editor" value="<?=$row->deskripsi_produk?>"><?=$row->deskripsi_produk?></textarea>
           
            </div>    
            <div class="form-group">
                <label for="jumlah_produk">Jumlah Produk</label>
                <input type="text" class="form-control" name="jumlah_produk" value="<?=$row->jumlah_produk?>" required> 
         
            </div>    
            <div class="form-group">
                <label for="nama_kat">Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value=""><--Pilih--></option>
                    <?php foreach($kategori->result() as $key => $data) { ?>
                            <option value="<?= $data->id_kat ?>" ><?=$data->nama_kat?></option>

                    <?php } ?>
                </select>
            </div>
                    <div class="form-group">
                <label for="nama_penjual">Penjual</label>
                <select name="penjual" class="form-control" required>
                    <option value=""><--Pilih--></option>
                    <?php foreach($penjual->result() as $key => $data) { ?>
                            <option value="<?= $data->id_penjual ?>" <?= set_select('penjual','$data->nama_penjual'); ?>><?=$data->nama_penjual?></option>
                    <?php } ?>
               </select>
                    </div> 
            <div class="form-group">
                <label for="ukuran_produk">Ukuran Produk*</label>
                <input type="text" class="form-control" name="ukuran_produk" value="<?=$row->ukuran_produk?>"> 
                <span class="badge badge-secondary mt-2">Boleh Kosong</span>
                
            </div>    
            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <input type="text" class="form-control" name="harga_produk" value="<?=$row->harga_produk?>"> 
       
            </div>    
           
            <div class="form-group">
                <label for="gambar_produk">Gambar Produk</label>
                <input type="file" class="form-control" name="gambar_produk" value="<?=$row->gambar_produk?>"> 
              
            </div>  

            <div class="form-group">
                <label for="gambar_produk">Thumb Produk 1</label>
                <input type="file" class="form-control" name="thumb_produk1" value="<?=$row->thumb_produk1?>"> 
              
            </div>  
            
            <div class="form-group">
                <label for="gambar_produk">Thumb Produk 2</label>
                <input type="file" class="form-control" name="thumb_produk2" value="<?=$row->thumb_produk2?>"> 
              
            </div>  
            
            <div class="form-group">
                <label for="gambar_produk">Thumb Produk 3 </label>
                <input type="file" class="form-control" name="thumb_produk3" value="<?=$row->thumb_produk3?>"> 
              
            </div>  
            
         

            <div class="form-group">
                <label for="slug_produk">Slug Produk</label>
                <input type="text" class="form-control" name="slug_produk" value="<?=$row->slug_produk?>"> 
              
            </div>  
          
            <button type="submit" name="<?=$page?>" class="btn btn-danger btn-lg float-right"><i class="fas fa-save"> Submit</i></button>  
                    </form>
            </div>
            
          
        </div>
    </div>
</div>

