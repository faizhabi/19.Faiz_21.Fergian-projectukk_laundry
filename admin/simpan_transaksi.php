<?php
include '../koneksi.php';

$kode_invoice = $_POST['kode_invoice'];
$id_member = $_POST['id_member'];
$id_outlet = $_POST['id_outlet'];
$qty = $_POST['qty'];
$biaya_tambahan = $_POST['biaya_tambahan'];
$id_user = $_POST['id_user'];
$tgl = date('Y-m-d H:i:s');
$batas_waktu = date('Y-m-d H:i:s', strtotime('+6 days'));

mysqli_query($koneksi,"insert into tb_transaksi values('','$id_outlet','','$kode_invoice','$id_member','$tgl','$batas_waktu','','$biaya_tambahan','','','$baru','belum_dibayar','$qty','','$id_user)");
header("location:laporan.php?info=simpan");
?>