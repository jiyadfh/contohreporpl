<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?= base_url('profile/tambah_data') ?>"> <p class="text-center"> Tambah Data Profile </p> </a>
    <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama depan</th>
                <th>nama belakang</th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
                <th>jenis kelamin</th>
                <th>alamat</th>
                <th>jenjang pendidikan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($profile as $p){ ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $p->nama_depan ?></td>
                <td><?= $p->nama_belakang ?></td>
                <td><?= $p->tempat_lahir ?></td>
                <td><?= $p->tanggal_lahir ?></td>
                <td><?= $p->jenis_kelamin ?></td>
                <td><?= $p->alamat ?></td>
                <td><?= $p->jenjang_pendidikan ?></td>
                <td><a href="<?= base_url('profile/update_data/'.$p->id)?>"> Edit </a></td>
                <td><a href="<?= base_url('profile/hapus_data/'.$p->id)?>"> hapus </a></td>
            </tr>
            <?php $no++; }?>
        </tbody>
    </table>
</body>
</html>