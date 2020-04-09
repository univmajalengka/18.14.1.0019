<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <form action="proses_tambah_guru.php" method="POST">
    <h1 align="center">Tambah Data Guru</h1>
        <table align="center" cellpadding="10" cellspacing="1">
            <tr>
                <th>NIP</th>
                <td><input type="text" name="nip"></td>
            </tr>
             <tr>
                <th>Nama</th>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><input type="text" name="jns_kel"></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><input type="text" name="status"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah</button></td>
            </tr>
        </table>
    </form>
</body>
</html>