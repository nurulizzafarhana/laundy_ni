<?php
if ($_POST) {
    // Ambil data dari form
    $id_member = $_POST['id_member'];
    $id_outlet = $_POST['id_outlet'];
    $id_paket = $_POST['id_paket']; // Array dari paket yang dipilih
    $qty = $_POST['qty']; // Array dari jumlah qty untuk tiap paket
    $id_user = $_POST['id_user'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $kembalian = $_POST['kembalian'];

    // Generate kode transaksi
    function generateTransactionCode() {
        return "TR-" . date("YmdHis");
    }

    $kode_transaksi = generateTransactionCode();

    if (empty($id_member)) {
        echo "<script>alert('Id member tidak boleh kosong');location.href='transaksi.php';</script>";
    } else {
        include "koneksi.php";

        // Insert data transaksi
        $insert_transaksi = mysqli_query($conn, "INSERT INTO transaksi (id_member, id_outlet, kode_transaksi, tgl, batas_waktu, status, dibayar, kembalian, id_user) 
                                                VALUES ('$id_member', '$id_outlet', '$kode_transaksi', '$tgl', '$batas_waktu', '$status', '$dibayar', '$kembalian', '$id_user')");

        // Ambil ID transaksi yang baru dimasukkan
        $id_transaksi = mysqli_insert_id($conn);

        $allInserted = true;

        // Menyimpan detail transaksi untuk tiap paket dan qty
        for ($i = 0; $i < count($id_paket); $i++) {
            $paket = $id_paket[$i];
            $qty_value = $qty[$i]; // Ambil qty yang sesuai untuk paket tersebut

            // Insert detail transaksi
            $insert_detail = mysqli_query($conn, "INSERT INTO detail_transaksi (id_transaksi, id_paket, qty) 
                                                  VALUES ('$id_transaksi', '$paket', '$qty_value')");

            if (!$insert_detail) {
                $allInserted = false;
                break; // Jika gagal insert detail, berhenti
            }
        }

        // Jika berhasil semua, tampilkan pesan sukses
        if ($allInserted) {
            echo "<script>alert('Sukses menambahkan transaksi dan detail transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi atau detail transaksi');location.href='transaksi.php';</script>";
        }
    }
}
?>
