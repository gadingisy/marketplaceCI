<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th>NO<th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Hp</th>
			<th>Jenis Kelamin</th>
			<th>Facebook</th>
			<th>Instagram</th>
			<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
		</tr>
		<?php
        $no = 1;
		foreach($model as $data){
		?>
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
			
				<td class="align-middle"><?php echo $data->nama_penjual; ?></td>
				<td class="align-middle"><?php echo $data->alamat_penjual; ?></td>
				<td class="align-middle"><?php echo $data->hp_penjual; ?></td>
				<td class="align-middle"><?php echo $data->jk_penjual; ?></td>
				<td class="align-middle"><?php echo $data->facebook_penjual; ?></td>
				<td class="align-middle"><?php echo $data->instagram_penjual; ?></td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-default btn-form-ubah"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
					<input type="hidden" class="nama_penjual" value="<?php echo $data->id_penjual; ?>">
        			<input type="hidden" class="nama_penjual" value="<?php echo $data->nama_penjual; ?>">
        			<input type="hidden" class="alamat_penjual" value="<?php echo $data->alamat_penjual; ?>">
        			<input type="hidden" class="hp_penjual" value="<?php echo $data->hp_penjual; ?>">
        			<input type="hidden" class="jk_penjual" value="<?php echo $data->jk_penjual; ?>">
					<input type="hidden" class="facebook_penjual" value="<?php echo $data->facebook_penjual; ?>">
					<input type="hidden" class="instagram_penjual" value="<?php echo $data->instagram_penjual; ?>">
				</td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus"><span class="glyphicon glyphicon-erase"></span></a>
				</td>
			</tr>
		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
	</table>
</div>
