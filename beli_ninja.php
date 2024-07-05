<?php
    echo "<head><title>Shinobi Arena: Ultimate Jutsu Showdown!</head></title>";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nama = isset($_POST['nama']) ? $_POST['nama'] :'';
        $desa = isset($_POST['desa']) ? $_POST['desa'] :'';
        $jutsu = isset($_POST['jutsu']) ? $_POST['jutsu'] :'';
    }

    $fp = fopen("guestbook.txt","a+");
    fputs($fp,"$nama|$desa|$jutsu|$status\n");
    fclose($fp);

    echo "Terima kasih telah mengisi Daftar Ninja Pilihan Anda";
    echo "<a href=tampilan.html> Dafta Ninja  </a><br>";
    echo "<a href=simpan_ninja.php> Lihat Daftar Ninja </a><br>";
?>
