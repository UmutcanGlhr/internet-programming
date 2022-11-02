<!DOCTYPE html>
<HTML>
    <Head>

        <title>AdminPaneli</title>

    </Head>

    <body>
        
       <?php
            $isim = $_COOKIE["KullaniciAdi"];
            
            echo "Merhaba";
            echo "<br />";
            echo $isim;
            echo "<br />";
            echo "<a href='UyePaneli.php'>Çıkış Yap</a>";

        ?>
    </body>




</HTML>