<?php
    require_once("ayar.php");
?>

<!DOCTYPE html>
<HTML>
    <Head>

        <title>AdminPaneli</title>

    </Head>

    <body>
            <?php
                $Admin = "Umutcan";
                $pass = "1234";
                $gelenad = $_POST["AdminAdi"];
                $gelenSifre = $_POST["AdminSifre"];
               
               
                if($gelenad==$Admin and $gelenSifre ==$pass)
                {
                       $_SESSION["Adi"] == $gelenad;
                       $_SESSION["sifre"] == $gelenSifre;
                       header("Location:AnaSayfa.php");
                }else
                {
                       echo "Kullanıcı Adı veya Şİfre Yanlış" ;
                       header("Refresh: 2; url=admin.php");
                }


            ?>


    </body>




</HTML>


