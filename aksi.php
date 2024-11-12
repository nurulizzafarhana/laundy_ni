<?php 
// Mengaktifkan session
session_start();
 
// Menghubungkan ke database
include './admin/koneksi.php';
 
// Menangkap data dari form login
$user = $_POST['username'];
$pass = $_POST['password'];
 
// Mengecek username dan password dalam database
$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($sql);

	// Menyimpan data penting ke session
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['nama_user'] = $data['nama_user'];
	$_SESSION['role'] = $data['role'];

	// Mengecek peran dan mengarahkan ke halaman sesuai
	if ($data['role'] == "admin") {
		header("location:index_admin.php");
	} else if ($data['role'] == "kasir") {
		header("location:kasir/index_kasir.php");
	} else if ($data['role'] == "owner") {
		header("location:owner/index_owner.php");
	} else {
		header("location:index.php?alert=gagal");
	}	
} else {
	header("location:login.php");
}
?>
