<?php
$server = 'sql201.epizy.com';
$user = 'epiz_28900032';
$password = '2Im71yFiMp';
$database = 'epiz_28900032_kut_otomasyon';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL sunucu ile baglanti kurulamadi! </br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}

echo "MySQL sunucuya baglanti kuruldu.</br>";
?>

