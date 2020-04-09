<?php
include 'koneksi.php';

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jns_kel = $_POST['jns_kel'];
    $nohp = $_POST['nohp'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

	mysqli_query($koneksi, "INSERT INTO d_guru VALUES('$nip', '$nama', '$alamat', '$jns_kel', '$nohp', '$jabatan', '$status')");
	header("location:data_guru.php");
?>