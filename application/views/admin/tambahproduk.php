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
             <?= form_open_multipart(base_url('Produk/process'),' class="form-horizontal"'); ?>
      
        
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
                            <option value="<?= $data->id_penjual ?>" <?= set_select('penjual','$data->id_penjual'); ?>><?=$data->nama_penjual?></option>
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
                <label for="slug_produk">Slug Produk</label>
                <input type="text" class="form-control" name="slug_produk" value="<?=$row->slug_produk?>"> 
              
            </div>  
          
            <button type="submit" name="<?=$page?>" class="btn btn-danger btn-lg float-right"><i class="fas fa-save"> Submit</i></button>  
        <?= form_close() ?>
            </div>
            
          
        </div>
    </div>
</div>

