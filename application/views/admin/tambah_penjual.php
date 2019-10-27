<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Tambah Penjual
                </div>
                <div class="card-body">
        <?php if( validation_errors() ) : ?>
              <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?> 
              </div>
         <?php endif; ?>
            <form action="" method="post">
            <div class="form-group">
                <label for="nama_penjual">Nama Penjual</label>
                <input type="text" class="form-control" name="nama_penjual" id="nama_penjual"> 
                <small class="form-text text-danger"><?= form_error('nama_penjual'); ?></small>
            </div>    
            <div class="form-group">
                <label for="alamat_penjual">Alamat Penjual</label>
                <textarea class="form-control" name="alamat_penjual" id="alamat_penjual"></textarea>
                <small class="form-text text-danger"><?= form_error('alamat_penjual'); ?></small>
            </div>    
            
            <div class="form-group">
                <label for="hp_penjual">No HP Penjual</label>
                <input type="text" class="form-control" name="hp_penjual"  id="hp_penjual"> 
                <small class="form-text text-danger"><?= form_error('hp_penjual'); ?></small>
            </div>  
            <div class="form-group">
            <label for="jk_penjual" name="jk_penjual" id="hp_penjual">Jenis Kelamin</label>
            <select class="form-control" name="jk_penjual" id="hp_penjual">
                <option selected>-- Pilih --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
             </div>
             <div class="form-group">
                <label for="facebook_penjual">Facebook Penjual</label>
                <input type="text" class="form-control" name="facebook_penjual"  id="facebook_penjual"> 
            </div>  
            <div class="form-group">
                <label for="instagram_penjual">Instagram Penjual</label>
                <input type="text" class="form-control" name="instagram_penjual"  id="instagram_penjual"> 
            </div>
            <button type="submit" name="tambah" class="btn btn-danger float-right">Tambah</button>  
            </div>
        </div>
    </div>
</div>