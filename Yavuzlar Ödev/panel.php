<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
<!-- kaynaklar 
    https://www.shecodes.io/athena/124793-how-to-create-a-form-with-several-questions-in-html
    https://www.sorukurdu.com/test-sorular/DGS-Cozumleme-Test1986-0.html  (buradan soru örneğine baktım)
    https://www.w3schools.com/php/default.asp
    https://www.tutorialspoint.com/php/create_mysql_database_using_php.htm
    db.php kısmında yazılımcı arkadaşım yardım etti anlatarak bazı anlamadığım yerler var özel olarak soracağım 
    
    -->
</head>
<body>
    <div class="container">
        <div class="soru-ara">
            <div class="listele">
                
                <form action="ara.php" method="POST">
                    <input type="text" id="ara" name="ara" placeholder="Soru numarası ara" require>
                    <button type="submit">Ara</button>
                </form>

                <form action="duzenle.php">
                </form>
                <?php include 'functions.php';
                $idler = getid();?>
                <div class="kay">
                <?php foreach ($idler as $id): ?>
                    <div class="soru">
                        <h2>Soru <?php echo $id['id']; ?></h2>
                        <button class="duzenle" onclick="window.location.href='duzenle.php?id=<?php echo $id['id']; ?>'">Düzenle</button>
                        <button class="sil" onclick="window.location.href='sil.php?id=<?php echo $id['id']; ?>'">Sil</button>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            
            
        </div>

        <div class="soru-ekle">
            <button  id="anasayfa" onclick="goToHomePage()">Anasayfa</button>
            <button  id="SoruEkleButton" onclick="goToSoruEkle()"><a href="soruekle.html">Soru Ekle</a></button>
        </div>
    </div>
</body>
</html>