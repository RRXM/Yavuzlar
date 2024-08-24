<?php
include 'functions.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $result = deleteSoru($id);

    if ($result) {

        header("Location: panel.php?mesaj=soru_silindi");

    } else {

        header("Location: panel.php?mesaj=soru_silinemedi");
    }

} else {
    
    header("Location: panel.php");
}
exit();
?>
