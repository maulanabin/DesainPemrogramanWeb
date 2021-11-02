<!-- Maulana Bintang Irfansyah - TI 2H -->
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Membuat Kalender</title>
</head>
<body>
    <h3 align="center">Maulana Bintang Irfansyah - TI 2H</h3>
<?php
$bulan = date("m");
$tahun = date("Y");
$hari = date("d");
$jumhari = date("t", mktime(0, 0, 0, $bulan, $hari, $tahun));
// menulis tanggal sekarang (22 Oktober 2021)
echo "<table align='center' border=0 width=150><tr><td align=center>";
echo date("D, d M Y ", mktime(0, 0, 0, $bulan, $hari, $tahun)); 
echo "</td></tr></table>";
// menulis hari (Fri)
echo "
<table align='center' bgcolor='	#ffe6e6' border=0 width=150 cellpadding=2 cellspacing=0 style='border:2px solid #ff6347'>
<tr bgcolor='B0C4DE'>
<td align=center><font color=red size=2>Minggu</font></td>
<td align=center><font color=white size=2>Senin</font></td>
<td align=center><font color=white size=2>Selasa</font></td>
<td align=center><font color=white size=2>Rabu</font></td>
<td align=center><font color=white size=2>Kamis</font></td>
<td align=center><font color=white size=2>Jumat</font></td>
<td align=center><font color=blue size=2>Sabtu</font></td></tr>
<tr> ";
// mengecek hari awal (tanggal 1)
$s = date ("w", mktime (0, 0, 0, $bulan, 1, $tahun));
for ($ds = 1; $ds <= $s; $ds++) { 
    echo "<td> </td>"; 
}
for ($d = 1; $d <= $jumhari; $d++) {
    // jika hari minggu maka buat garis baru
    if (date("w", mktime (0, 0, 0, $bulan, $d, $tahun)) == 0) { 
        echo "</tr><tr>"; 
    }
    /* jika hari minggu warna huruf merah
    jika hari sabtu warna huruf biru
    jika hari senin - jumat warna huruf hitam */
    if (date("D", mktime (0, 0, 0, $bulan, $d, $tahun)) == "Sun") { 
        $warnahuruf = "red"; 
    } else if (date("D", mktime (0, 0, 0, $bulan, $d, $tahun)) == "Sat") { 
        $warnahuruf = "blue"; 
    } else { 
        $warnahuruf = "black";
    }
    /* jika tanggal adalah sekarang tulisan tebal dan warna kolom abu-abu */
    if (date("d") == $d) { 
        $tulis = "<strong>$d</strong>"; 
        $wk = "#B0C4DE"; 
    } else { 
        $tulis = "$d"; 
        $wk = "";
    }
    // menulis tanggal
    echo "<td width=15% align=center valign=middle bgcolor='$wk'><font size=2 face='arial' color='$warnahuruf'>$tulis</font></td>";
    if (date("w", mktime (0, 0, 0, $bulan, $d,$tahun)) == 6) {
        echo "</tr>"; 
    }
}
echo '</align=>';
?>
</body>
</html>
