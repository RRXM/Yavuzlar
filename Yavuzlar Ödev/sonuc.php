<?php
session_start();
$dogru_sayisi = $_SESSION['dogru_sayisi'];
$toplam_soru = $_SESSION['soru_numarasi'];
$puan = ($dogru_sayisi / $toplam_soru) * 100; 


session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonuç</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="baslik">Sonuçlar</h2>
        <p>Doğru Sayısı: <?php echo $dogru_sayisi; ?></p>
        <p>Toplam Soru: <?php echo $toplam_soru; ?></p>
        <p>Puanınız: <?php echo $puan; ?></p>
        <button onclick="goToHomePage()">Anasayfa</button>
    </div>
</body>
</html>
