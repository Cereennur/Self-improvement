<?php

$vt_sunucu="localhost";
$vt_kulanici="root";
$vt_sifre="";
$vt_adi="yasamkoclugu";

$baglan=mysqli_connect($vt_sunucu,$vt_kulanici,$vt_sifre,$vt_adi);


if(!$baglan)
{
    die("Veri tabanı bağlantı işlemi başarısız".mysqli_connect_error());
}
else{
    echo "bağlantı başarılı";
}

?>