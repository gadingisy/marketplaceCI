<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Edit Data Penjual
                </div>
                <div class="card-body">
        <?php if( validation_errors() ) : ?>
              <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?> 
              </div>
         <?php endif; ?>
            <form action="" method="post">
                <input type="hidden" name="id_penjual" value="<?= $data['id_penjual']; ?>">
            <div class="form-group">
                <label for="nama_penjual">Nama Penjual</label>
                <input type="text" class="form-control" name="nama_penjual" id="nama_penjual" value="<?= $data['nama_penjual']; ?>"> 
                <small class="form-text text-danger"><?= form_error('nama_penjual'); ?></small>
            </div>    
            <div class="form-group">
                <label for="alamat_penjual">Alamat Penjual</label>
                <textarea class="form-control" name="alamat_penjual" id="alamat_penjual"><?= $data['alamat_penjual']; ?></textarea>
                <small class="form-text text-danger"><?= form_error('alamat_penjual'); ?></small>
            </div>    
            <div class="form-group">
                <label for="hp_penjual">No HP Penjual</label>
                <input type="text" class="form-control" name="hp_penjual" value="<?= $data['hp_penjual']; ?>" id="hp_penjual"> 
                <small class="form-text text-danger"><?= form_error('hp_penjual'); ?></small>
            </div>  
            <div class="form-group">
            <label for="jk_penjual" name="jk_penjual">Jenis Kelamin</label>
            <select class="form-control" name="jk_penjual">
                        <?php foreach( $jk as $jk ) : ?>
                            <?php if($jk == $data['jk_penjual']) : ?>  
                                  <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                            <?php else : ?>
                                  <option value="<?= $jk; ?>"><?= $jk; ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
            </select>
             </div>
             <div class="form-group">
                <label for="facebook_penjual">Facebook Penjual</label>
                <input type="text" class="form-control" name="facebook_penjual"  value="<?= $data['facebook_penjual']; ?>" id="facebook_penjual"> 
            </div>  
            <div class="form-group">
                <label for="instagram_penjual">Instagram Penjual</label>
                <input type="text" class="form-control" name="instagram_penjual"  id="instagram_penjual" value="<?= $data['instagram_penjual']; ?>">  
            </div>
            <button type="submit" name="edit" class="btn btn-danger float-right">Edit</button>  
            </div>
        </div>
    </div>
</div>