<?php
include '../koneksi.php';

$id = $_POST['id'];
$kode_invoice = $_POST['kode_invoice'];
$id_member = $_POST['id_member'];
$id_outlet = $_POST['id_outlet'];
$qty = $_POST['qty'];
$biaya_tambahan = $_POST['biaya_tambahan'];
$id_user = $_POST['id_user'];

mysqli_query($koneksi,"update tb_transaksi set kode_invoice='$kode_invoice', id_member='$id_member', id_outlet='$id_outlet', qty='$qty', biaya_tambahan='$biaya_tambahan', id_user='$id_user' where id=$id");

header("location:laporan.php?info=update");
?>