<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Tambah Data Profile</h1>
    <from action="<?= base_url('profile/action_tambah_data') ?>" method="post">
        <table>
            <tr>
                <td>Nama depan</td>
                <td>:</td>
                <td><input type="text" name="nama_depan" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama belakang</td>
                <td>:</td>
                <td><input type="text" name="nama_belakang" class="form-control"></td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L"> L
                    <input type="radio" name="jenis_kelamin" value="p"> P
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" class="form-control"></td>
            </tr>
            <tr>
                <td>jenjang pendidikan</td>
                <td>:</td>
                <td>
                    <select name="jenjang_pendidikan" id="" class="form-control">
                    <option value="SMK">SMK Sederajat </option>
                    <option value="D3">D3 </option>
                    <option value="S1">S1 </option>
                    <option value="S2">S2 </option>
                </td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td colspan="3" class="text-center">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="" class="btn btn-warning">Kembali</a>
                </td>
            </tr>
        </table>
    </from>
</body>
</html>