<?php
session_start();
include 'functions.php';


if (!isset($_SESSION['soru_numarasi'])) {
    $_SESSION['soru_numarasi'] = 0;
    $_SESSION['dogru_sayisi'] = 0;
}


$sorular = getall(); 


if ($_SESSION['soru_numarasi'] >= count($sorular)) {
    header("Location: sonuc.php");
    exit();
}


$mevcut_soru = $sorular[$_SESSION['soru_numarasi']];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['choice']) && $_POST['choice'] == $mevcut_soru['cevap']) {
        $_SESSION['dogru_sayisi']++;
    }

    $_SESSION['soru_numarasi']++;
    header("Location: sorular.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru <?php echo $_SESSION['soru_numarasi'] + 1; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="baslik">Soru <?php echo $_SESSION['soru_numarasi'] + 1; ?></h2>
        <h2 class="soru"><?php echo $mevcut_soru['soru']; ?></h2>
        <form method="POST" action="sorular.php">
            <ol type="A" class="choices">
                <li><input type="radio" name="choice" id="choice1" value="A"><label for="choice1"><?php echo $mevcut_soru['A']; ?></label></li>
                <li><input type="radio" name="choice" id="choice2" value="B"><label for="choice2"><?php echo $mevcut_soru['B']; ?></label></li>
                <li><input type="radio" name="choice" id="choice3" value="C"><label for="choice3"><?php echo $mevcut_soru['C']; ?></label></li>
                <li><input type="radio" name="choice" id="choice4" value="D"><label for="choice4"><?php echo $mevcut_soru['D']; ?></label></li>
            </ol>
            <button type="submit" class="next-button">Soruyu Geç</button>
        </form>
    </div>
</body>
</html>
