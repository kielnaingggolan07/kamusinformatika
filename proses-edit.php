<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['edit'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$Nama_Kata = $_POST['Nama_Kata'];
	$Keterangan = $_POST['Keterangan'];

	
	// buat query update
	$sql = "UPDATE kamus SET Nama_Kata='$Nama_Kata', Keterangan='$Keterangan' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-kata.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
