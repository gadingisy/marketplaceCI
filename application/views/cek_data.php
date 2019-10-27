<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuman Cek Data</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>ID_PRODUK</th>
            <th>NAMA_PRODUK</th>
            <th>DESKRIPSI_PRODUK</th>
            <th>harga_produk</th>
            <th>gambar_utama</th>
            <th>gambarthumb</th>
        </tr>

        <?php
                    $no = 1;
                    foreach ($data as $data) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->id_penjual ?></td>
                        <td><?php echo $data->nama_penjual ?></td>
                        <td><?php echo $data->alamat_penjual ?></td>
                        <td><?php echo $data->hp_penjual ?></td>
                        <td><?php echo $data->facebook_penjual ?></td>
                        <td><?php echo $data->instagram_penjual ?></td>
                        <?php endforeach; ?>
        </body>
</html>