<?php
    echo "<head><title>Shinobi Arena: Ultimate Jutsu Showdown!</head></title>";
    $fp = fopen("guestbook.txt","r");
    echo "<table border=0>";

    while($isi = fgets($fp,80)){
        $pisah = explode("|",$isi);
        echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
        echo "<tr><td>Desa </td><td>: $pisah[1]</td></tr>";
        echo "<tr><td>Jutsu </td><td>: $pisah[2]</td></tr>";
        echo "<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
    }
    echo "</table>";
    echo "<a href=index.html> Klik Disini </a>Isi Form Shinobi Arena: Ultimate Jutsu Showdown!";
?>