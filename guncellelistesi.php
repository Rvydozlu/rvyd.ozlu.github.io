<?php

include("mysqlbaglan.php");


$sql = "SELECT * FROM uye";


$cevap = mysqli_query($baglanti,$sql);

     
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}


echo "<table border=1>";
echo "<tr>";
echo "<th>Kisi ID</th>";
echo "<th>Adı</th>";
echo "<th>Soyadı</th>";
echo "<th>Tc</th>";
echo "<th>Tlf</th>";
echo "<th>Adres</th>";
echo "<th>Sifre</th>";
echo "</tr>";


while($gelen=mysqli_fetch_array($cevap))
{

  echo "<tr><td>".$gelen['kisii_id']."</td>";
  echo "<td>".$gelen['ad']."</td>";
  echo "<td>".$gelen['soyad']."</td>";
  echo "<td>".$gelen['tc']."</td>";
  echo "<td>".$gelen['tlf']."</td>";
  echo "<td>".$gelen['adres']."</td>";
  echo "<td>".$gelen['sifre']."</td>";
  echo "<td><a href=guncelle.php?id=";
  echo $gelen['kisii_id'];
  echo ">Güncelle</a></td></tr>";    
}

echo "</table>";
echo "<br/><a href='anasayfa.php'> Geri Dön</a>";



mysqli_close($baglanti);
?>

