<?php

$koneksi = mysqli_connect("localhost", "root", "", "pendaftaransiswabaru");
$html = '<html><body><center><h3>DATA CALON SISWA SMAN 14 SURABAYA</h3></center><hr/><br/>';
$html .= '<table border="1" width ="100%">
<tr>
<th> PENDAFTARAN </th>
<th> TAHUN MASUK </th>
<th> NAMA LENGKAP </th>
<th> JENIS KELAMIN </th>
<th> TEMPAT LAHIR </th>
<th> TANGGAL LAHIR</th>
<th> ALAMAT LENGKAP</th>
<th> NAMA AYAH</th>
<th> PEKERJAAN AYAH</th>
<th> PENGHASILAN AYAH</th>
</tr>';
$query = mysqli_query($koneksi, "select * from data_calon_siswa");
$query = mysqli_query($koneksi, "select *, date_format(tanggal_lahir, '%d-%m-%Y') as tgl from data_calon_siswa;");
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
    <td>" . $row['pendaftaran'] . "</td>
    <td>" . $row['tahun_masuk'] . "</td>
    <td>" . $row['nama_lengkap'] . "</td>
    <td>" . $row['jenis_kelamin'] . "</td>
    <td>" . $row['tempat_lahir'] . "</td>
    <td>" . $row['tgl'] . "</td>
    <td>" . $row['alamat_lengkap'] . "</td>
    <td>" . $row['nama_ayah'] . "</td>
    <td>" . $row['pekerjaan_ayah'] . "</td>
    <td>" . "Rp. " . number_format($row['penghasilan_ayah']) . "</td>
    </tr>";
}

$html .= '</table>';
$html .= '</body></html>';

$filename = "LAPORAN DATA CALON SISWA SMAN 14 SURABAYA.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
echo $html;
?>