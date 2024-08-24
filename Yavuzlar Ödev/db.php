<?php

    try {
        $pdo = new PDO("sqlite:db.db");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\Throwable $th) {
        echo "Hata " . $th;
    }



?>