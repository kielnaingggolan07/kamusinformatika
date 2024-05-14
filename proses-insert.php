<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['add'])){
	
	// ambil data dari formulir
	$Nama_Kata = $_POST['Nama_Kata'];
	$Keterangan = $_POST['Keterangan'];
	
	// buat query
	$sql = "INSERT INTO kamus (Nama_Kata, Keterangan) VALUE ('$Nama_Kata', '$Keterangan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: welcome2.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: welcome2.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
