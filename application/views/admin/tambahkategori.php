<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Tambah Kategori
                </div>
                <div class="card-body">
        <?php if( validation_errors() ) : ?>
              <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?> 
              </div>
         <?php endif; ?>
            <form action="" method="post">
            <div class="form-group">
                <label for="nama_kat">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kat" id="nama_kat"> 
                <small class="form-text text-danger"><?= form_error('nama_kat'); ?></small>
            </div>    
            <div class="form-group">
                <label for="jenis_kat" name="jenis_kat">Jenis Kategori</label>
                 <select class="form-control" name="jenis_kat">
                        <?php foreach( $jenis as $jenis ) : ?>
                            <?php if($jenis == $data['jenis_kat']) : ?>  
                                  <option value="<?= $jenis; ?>" selected><?= $jenis; ?></option>
                            <?php else : ?>
                                  <option value="<?= $jenis; ?>"><?= $jenis; ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
            </select>
                <small class="form-text text-danger"><?= form_error('jenis_kat'); ?></small>
            </div>    
            <div class="form-group">
                <label for="slug_kat">Slug Kategori</label>
                <input type="text" class="form-control" name="slug_kat" id="slug_kat"> 
                <small class="form-text text-danger"><?= form_error('slug_kat'); ?></small>
            </div>     
            <button type="submit" name="tambah" class="btn btn-danger float-right">Tambah</button>  
            </div>
        </div>
    </div>
</div>