<?php
    require_once("ayar.php");
?>

<!DOCTYPE html>
<HTML>
    <Head>

        <title>UyePaneli</title>

    </Head>

    <body>
            <?php
                $KA="umutcan";
                $KS="123456";
                $gelenad = $_POST["KullaniciAdi"];
                $gelenSifre = $_POST["KullaniciSifre"];
                $yasamsuresi = time()+ (60*60);
                setcookie("KullaniciAdi",$gelenad,$yasamsuresi);
                setcookie("KullaniciSifre",$gelenSifre,$yasamsuresi);
                if($KA == $gelenad  and $KS == $gelenSifre )
                {
                       
                       header("Location:AnaSayfa1.php");
                }else
                {
                       echo "Kullanıcı Adı veya Şİfre Yanlış" ;
                       header("Refresh: 2; url=UyePaneli.php");
                }


            ?>


    </body>




</HTML>