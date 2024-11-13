<?php
include "koneksi.php";

// Query untuk mendapatkan detail member dan transaksi
$sql = 'SELECT * FROM transaksi 
        JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi 
        JOIN member ON member.id_member = transaksi.id_member 
        JOIN outlet ON outlet.id_outlet = transaksi.id_outlet 
        WHERE transaksi.id_transaksi = ' . $_GET['id_transaksi'];
$result = mysqli_query($conn, $sql);
$data_detail_transaksi = mysqli_fetch_assoc($result);

// Menghitung total harga
$total_harga = 0;
$dibayar = $data_detail_transaksi['dibayar']; // Jumlah yang dibayar oleh pelanggan

// Query untuk mengambil detail transaksi yang berkaitan
$qry_pembayaran = mysqli_query($conn, "SELECT * FROM transaksi 
                                       JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi 
                                       JOIN paket ON paket.id_paket = detail_transaksi.id_paket 
                                       WHERE transaksi.id_transaksi = " . $_GET['id_transaksi']);
while ($data_pembayaran = mysqli_fetch_array($qry_pembayaran)) {
    $harga = $data_pembayaran['harga'];
    $qty = $data_pembayaran['qty'];
    $total_harga += $harga * $qty;
}

// Menghitung kembalian
$kembalian = $dibayar - $total_harga;
?>

<!DOCTYPE html>
<html>
<head>
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <title>Struk Transaksi</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Doto:wght@100..900&display=swap');
        body {
            margin: 5px;
            font-family: "Doto", sans-serif;
            font-weight: 700;
        }

        .struk-header,
        .struk-header h2 {
            text-align: center;
            margin-bottom: 3px;
            font-size: 14px;
        }
        .struk-body {
            margin-bottom: 2px;
            font-size: 10px;
        }

        .struk-body table {
            border-collapse: collapse;
            width: 100%;
        }

        .struk-body table th,
        .struk-body table td {
            padding: 3px;
            text-align: left;
        }

        .struk-body table th {
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="struk-header">
        <h2>SWOG Laundry</h2>
        <p>Email: swog_laundry@gmail.com</p>
        <p>Telp: 0844523497</p>
    </div>
    <hr size="1" color="black">

    <div class="struk-body">
        <div class="date" align="right">
            <?php echo date('l, d-m-Y'); ?><br>
        </div>
        <table>
            <tbody>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">No Transaksi</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['id_transaksi'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Kode Transaksi</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['kode_transaksi'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Nama Lengkap</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['nama_member'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Alamat</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['alamat'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Telepon</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['tlp'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Nama Outlet</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['nama'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Nominal Pembayaran</td>
                    <td class="fw-bold fs-6"><?= 'Rp ' . number_format($data_detail_transaksi['dibayar'], 0, ',', '.') ?></td>

                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Status Order</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['status'] ?></td>
                </tr>
                <tr>
                    <td class="col-lg-4 fw-bold text-muted">Tanggal Diambil</td>
                    <td class="fw-bold fs-6"><?= $data_detail_transaksi['batas_waktu'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <table class="table table-hover table-striped" style="font-size: 10px;">
        <tr>
            <th>No</th>
            <th>Tanggal Order</th>
            <th>Tanggal Bayar</th>
            <th>Paket Laundry</th>
            <th>Berat Cucian</th>
            <th>Harga/Kg</th>
            <th>Subtotal</th>
        </tr>
        <tbody>
            <?php
            $qry_pembayaran = mysqli_query($conn, "SELECT * FROM transaksi 
                                                   JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi 
                                                   JOIN paket ON paket.id_paket = detail_transaksi.id_paket 
                                                   WHERE transaksi.id_transaksi = " . $_GET['id_transaksi']);
            $no = 0;
            while ($data_pembayaran = mysqli_fetch_array($qry_pembayaran)) {
                $harga = $data_pembayaran['harga'];
                $qty = $data_pembayaran['qty'];
                $total = $harga * $qty;
                $no++;
            ?>
                <tr class="text-xs font-weight-bold">
                    <td class="align-middle text-left"><?= $no ?></td>
                    <td class="align-middle text-left"><?= $data_pembayaran['tgl'] ?></td>
                    <td class="align-middle text-left"><?= $data_pembayaran['tgl_bayar'] ?></td>
                    <td class="align-middle text-left"><?= $data_pembayaran['nama_paket'] ?></td>
                    <td class="align-middle text-left"><?= $data_pembayaran['qty'] ?> kg</td>
                    <td class="align-middle text-left">Rp. <?= number_format($harga, 0, ',', '.') ?></td>
                    <td class="align-middle text-left">Rp. <?= number_format($total, 0, ',', '.') ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Total Harga, Jumlah Bayar, dan Kembalian -->
    <hr size="1" color="black">
    <table style="width:100%; font-size: 10px;">
        <tr>
            <td><strong>Total Harga</strong></td>
            <td>: Rp. <?= number_format($total_harga, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td><strong>Jumlah Bayar</strong></td>
            <td>: Rp. <?= number_format($dibayar, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td><strong>Kembalian</strong></td>
            <td>: Rp. <?= number_format($kembalian, 0, ',', '.') ?></td>
        </tr>
    </table>

    <br><br>
    <script>
        window.print();
    </script>
</body>
</html>
