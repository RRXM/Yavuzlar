<?php 
    include "db.php";

    function getid(){

        global $pdo;
        
        $query = "SELECT id FROM sorular";

        $statement = $pdo->prepare($query);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    

    function getall(){

        global $pdo;

        $query = "SELECT * FROM sorular";

        $statement = $pdo->prepare($query);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    function getbirsoru($id){

        global $pdo;

        $query = "SELECT soru, A, B, C, D, cevap FROM sorular WHERE id = :id";

        $statement = $pdo->prepare($query);

        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    function deleteSoru($id) {
        
        global $pdo;
    
        $query = "DELETE FROM sorular WHERE id = :id";

        $statement = $pdo->prepare($query);

        $statement->bindParam(':id', $id, PDO::PARAM_INT); //buradaki id kısmını arakadaş anlattı ama anlamadım mentöre soracam
    
        return $statement->execute(); //burası true yada false dönecekmiş 
    }

    function soruekle($soru,$a,$b,$c,$d,$cevap){

        global $pdo;

        $query = "INSERT INTO sorular (soru, A, B, C, D, cevap) VALUES ('$soru', '$a', '$b', '$c', '$d', '$cevap')";

        $statement = $pdo->prepare($query);

        $statement->execute();
    
    }

    function soruGuncelle($id,$soru,$a,$b,$c,$d,$cevap){

        global $pdo;

        $query = "UPDATE sorular SET soru = '$soru', A = '$a', B = '$b', C = '$c', D = '$d', cevap = '$cevap' WHERE id = '$id'";

        $statement = $pdo->prepare($query);

        $statement->execute();
    }

?>