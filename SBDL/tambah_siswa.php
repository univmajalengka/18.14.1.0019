<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <form action="proses_tambah_siswa.php" method="POST">
    <h1 align="center">Tambah Data Siswa</h1>
        <table align="center" cellpadding="10" cellspacing="1">
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td><input type="text" name="tmp_lahir"></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <th>jenis Kelamin</th>
                <td><input type="text" name="jns_kel"></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr>
                <th>Tahun Masuk</th>
                <td><input type="text" name="tahun_masuk"></td>
            </tr>
            <tr>
                <th>ID Kelas</th>
                <td><input type="text" name="id_kelas"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah</button></td>
            </tr>
        </table>
    </form>
</body>
</html>