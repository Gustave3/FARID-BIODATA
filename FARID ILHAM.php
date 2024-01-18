<?php

$nama = "faridilham <br>";
$umur = " 17 tahun <br>";
$kelas = "x rpl 2 <br>";
$tempattanggallahir = "jakarta 21-agustus-2007 <br>";
$nomorwa = "085888093677 <br>";
$alamat = "kampung duri dalam <br>";

function Mybiodata(){
    global  $nama, $umur, $kelas, $tempattanggallahir, $nomorwa, $alamat;
    echo "Nama Lengkap : $nama <br/> Umur : $umur <br/> Kelas : $kelas <br/> Tempat/Tanggal Lahir : $tempattanggallahir <br/> No WhatsApp : $nomorwa <br/> Alamat : $alamat";
}
echo Mybiodata();
     
?>