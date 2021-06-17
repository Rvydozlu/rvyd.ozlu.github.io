<html>
<head><meta charset="utf-8"></head>
<body>
<?php

include("mysqlbaglan.php");


$sql = "SELECT * FROM uye";


$cevap = mysqli_query($baglanti,$sql);

      
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}


echo "<table border=1>";
echo "<tr><th>Kisi ID</th><th>Adı</th><th>Soyadı</th><th>Tc</th><th>Tlf</th><th>Adres</th><th>Sifre</th></tr>";


while($gelen=mysqli_fetch_array($cevap))
{

  echo "<tr><td>".$gelen['kisii_id']."</td>";
  echo "<td>".$gelen['ad']."</td>";
  echo "<td>".$gelen['soyad']."</td>";
  echo "<td>".$gelen['tc']."</td>";
  echo "<td>".$gelen['tlf']."</td>";
  echo "<td>".$gelen['adres']."</td>";
  echo "<td>".$gelen['sifre']."</td>";
  echo "<td><a href=kayitsil.php?id=".$gelen['kisii_id'].">Sil</a></td></tr>";    
}

echo "</table>";


mysqli_close($baglanti);
?>

</body>
</html>

