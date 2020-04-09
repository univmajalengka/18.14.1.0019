<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Dashboard</title>
</head>
<body>
    <h1 align="center">Selamat datang</h1>
    <h2 align="center">Data Guru</h2>
    <h3 align="center"><a href="tambah_guru.php">Tambah Data Guru</a></h3>
    <table align="center" border="1" cellpadding="10" cellspacing="0" width="800px">
    <tr>
        <td>No.</td>
        <td>NIP</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>No. HP</td>
        <td>Jabatan</td>
        <td>Status</td>
    </tr>
    <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM d_guru");
        while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['Nip']; ?></td>
        <td><?= $data['Nama']; ?></td>
        <td><?= $data['Alamat']; ?></td>
        <td><?= $data['Jns_Kel']; ?></td>
        <td><?= $data['NoHp']; ?></td>
        <td><?= $data['Jabatan']; ?></td>
        <td><?= $data['Status']; ?></td>
    </tr>
    <?php
        }
    ?>
    </table>

    <h2 align="center">Data Siswa</h2>
    <h3 align="center"><a href="tambah_siswa.php">Tambah Data Siswa</a></h3>
    <table align="center" border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>No. Telepon</th>
            <th>Tahun Masuk</th>
        </tr>
        <?php
        include('koneksi.php');
        $query = mysqli_query($koneksi, "SELECT * FROM d_siswa");
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $data['Nis']; ?></td>
            <td><?= $data['Nama']; ?></td>
            <td><?= $data['Alamat']; ?></td>
            <td><?= $data['Tmp_Lahir']; ?></td>
            <td><?= $data['Tgl_lahir']; ?></td>
            <td><?= $data['Jns_Kel']; ?></td>
            <td><?= $data['Agama']; ?></td>
            <td><?= $data['NoHP']; ?></td>
            <td><?= $data['Tahun_Masuk']; ?></td>
        </tr>
        <?php
             }
        ?>
    </table>
</body>
</html>