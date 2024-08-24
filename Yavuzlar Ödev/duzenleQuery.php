<?php 

    include "functions.php";

    if(isset($_POST['id']) && isset($_POST['soru']) && isset($_POST['A']) && isset($_POST['B']) && isset($_POST['C']) && isset($_POST['D']) && isset($_POST['cevap'])) {
        $id = $_POST['id'];
        $soru = $_POST['soru'];
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $cevap = $_POST['cevap'];

        soruGuncelle($id,$soru,$A,$B,$C,$D,$cevap);
        
        header("location: panel.php?mesaj=soru_eklendi");
    }

?>