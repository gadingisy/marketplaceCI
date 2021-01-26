<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Edit Data Kategori Artikel
                </div>
                <div class="card-body">
        <?php if( validation_errors() ) : ?>
              <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?> 
              </div>
         <?php endif; ?>
            <form action="" method="post">
                <input type="hidden" name="id_artikel_kategori" value="<?= $data['id_artikel_kategori']; ?>">
            <div class="form-group">
                <label for="nama_artikel_kategori">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_artikel_kategori" id="nama_artikel_kategori" value="<?= $data['nama_artikel_kategori']; ?>"> 
                <small class="form-text text-danger"><?= form_error('nama_artikel_kategori'); ?></small>
            </div>    
            
            <div class="form-group">
                <label for="slug_artikel_kategori">Slug Kategori Artikel</label>
                <input type="text" class="form-control" name="slug_artikel_kategori" id="slug_artikel_kategori" value="<?= $data['slug_artikel_kategori']; ?>"> 
                <small class="form-text text-danger"><?= form_error('slug_artikel_kategori'); ?></small>
            </div>  
            
            <button type="submit" name="edit" class="btn btn-danger float-right">Edit</button>  
            </div>
        </div>
    </div>
</div>
