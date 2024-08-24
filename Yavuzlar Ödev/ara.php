<?php 

    include "functions.php";

    if(isset($_POST['ara'])){

        $soru_id = $_POST['ara'];
        echo $soru_id;
        $arama_sonuc = getbirsoru($soru_id);

        echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <link rel="stylesheet" href="style.css">
                    <script src="script.js"></script>
                </head>';
        echo '<body>
            <div class="container">
                <div class="soru-ara">
                    <div class="listele">
                        
                        <form action="ara.php" method="POST">
                            <input type="text" id="ara" name="ara" placeholder="Soru numarası ara" require>
                            <button type="submit">Ara</button>
                        </form>';

        echo   "<form action='duzenle.php'>
                </form>
                <div class='kay'>

                    <div class='soru'>
                        <h2>Soru $soru_id </h2>
                        <button class='duzenle' onclick='window.location.href='duzenle.php?id=$soru_id'>Düzenle</button>
                        <button class='sil' onclick='window.location.href='sil.php?id=$soru_id'>Sil</button>
                    </div>

                </div>
            </div>
            
            
        </div>";

    echo    '<div class="soru-ekle">
            <button  id="anasayfa" onclick="goToHomePage()">Anasayfa</button>
            <button  id="SoruEkleButton" onclick="goToSoruEkle()"><a href="soruekle.html">Soru Ekle</a></button>
        </div>
    </div>
</body>
</html>';

    }


?>