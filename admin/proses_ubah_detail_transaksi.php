<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$dibayar = $_POST['jumlah_dibayar'];
$kembalian = $_POST['kembalian']; // Terima nilai kembalian yang dihitung di JS
$status = $_POST['status'];
$qty = $_POST['qty'];
$id_paket = $_POST['id_paket'];
$tgl_bayar = $_POST['tgl_bayar']; // Ambil tanggal bayar dari form

// Update transaksi dengan nominal bayar, kembalian, dan tgl_bayar jika statusnya baru atau proses
if ($status === 'baru' || $status === 'proses') {
    $update_transaksi = "UPDATE transaksi SET dibayar = '$dibayar', kembalian = '$kembalian', status = '$status', tgl_bayar = '$tgl_bayar' WHERE id_transaksi = '$id_transaksi'";
} else {
    // Jika status tidak "baru" atau "proses", hanya perbarui status saja tanpa mengubah dibayar, kembalian, atau tgl_bayar
    $update_transaksi = "UPDATE transaksi SET status = '$status' WHERE id_transaksi = '$id_transaksi'";
}

mysqli_query($conn, $update_transaksi);

// Update detail transaksi untuk qty
for ($i = 0; $i < count($id_paket); $i++) {
    $update_detail = "UPDATE detail_transaksi SET qty = '{$qty[$i]}' WHERE id_transaksi = '$id_transaksi' AND id_paket = '{$id_paket[$i]}'";
    mysqli_query($conn, $update_detail);
}

echo "<script>alert('Transaksi berhasil diupdate');location.href='transaksi.php';</script>";
?>
