<html>
<head><meta charset="utf-8">
 <style>
	  h1{
	    color:#8F3114;
	    text-align:center;
      }
	  body {
		  background-color:#7798A8;
	  }	  
	  </style>
</head>
<body>
<?php

include("mysqlbaglan.php");


$sql = "SELECT * FROM uye";


$cevap = mysqli_query($baglanti,$sql);

    
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}


echo "<h1> ÜYE LİSTESİ <h1>";
echo "<table border=8 width='1500' height='500'>";
echo "<tr><th>Kisi ID</th><th>Adı</th><th>Soyadı</th><th>Tc</th><th>Tlf</th><th>Adres</th><th>Sifre</th></tr>";


while($gelen=mysqli_fetch_array($cevap))
{
   
    echo "<tr><td>".$gelen['kisii_id']."</td>";
    echo "<td>".$gelen['ad']."</td>";
    echo "<td>".$gelen['soyad']."</td>";
    echo "<td>".$gelen['tc']."</td>";
    echo "<td>".$gelen['tlf']."</td>";   
    echo "<td>".$gelen['adres']."</td>";
    echo "<td>".$gelen['sifre']."</td></tr>";	
}

echo "</table>";


mysqli_close($baglanti);

echo "Yeni kayıt eklemek için <a href='kayitformu.php'> Tiklayiniz</a>\n";
?>
</body>
</html>
