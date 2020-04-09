<?php
include 'koneksi.php';

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jns_kel = $_POST['jns_kel'];
    $agama = $_POST['agama'];
    $nohp = $_POST['nohp'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $id_kelas = $_POST['id_kelas'];

	mysqli_query($koneksi, "INSERT INTO d_siswa VALUES('$nis', '$nama', '$alamat', '$tmp_lahir', '$tgl_lahir', '$jns_kel', '$agama', '$nohp', '$tahun_masuk', '$id_kelas')");
	header("location:index.php");
?>