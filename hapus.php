<?php

include("config.php");

if( isset($_GET['id']) ){
    
    // ambil id dari query string
    $id = $_GET['id'];
    
    // simpan nilai id sebelum dihapus
    $deleted_id = (int)$id;

    // buat query hapus
    $sql = "DELETE FROM kamus WHERE id=$id";
    $query = mysqli_query($db, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        // atur ulang nilai auto-increment
        $sql_reset_auto_increment = "ALTER TABLE kamus AUTO_INCREMENT = 1";
        mysqli_query($db, $sql_reset_auto_increment);
        header('Location: list-kata.php');
    } else {
        die("gagal menghapus...");
    }
    
} else {
    die("akses dilarang...");
}

?>
