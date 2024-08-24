<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">

            <?php include "functions.php";
            $no = $_GET['id'];
            $bilgiler=getbirsoru($no);?>
            <div class="duzenleme-alani">
                <form action="duzenleQuery.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $no; ?>">
                    
                    <label for="soru">Soru:</label>
                    <input type="text" name="soru" value="<?php echo $bilgiler['soru']; ?>" required><br>

                    <label for="A">A Şıkkı:</label>
                    <input type="text" name="A" value="<?php echo $bilgiler['A']; ?>" required><br>

                    <label for="B">B Şıkkı:</label>
                    <input type="text" name="B" value="<?php echo $bilgiler['B']; ?>" required><br>

                    <label for="C">C Şıkkı:</label>
                    <input type="text" name="C" value="<?php echo $bilgiler['C']; ?>" required><br>

                    <label for="D">D Şıkkı:</label>
                    <input type="text" name="D" value="<?php echo $bilgiler['D']; ?>" required><br>

                    <label for="cevap">Doğru Cevap:</label>
                    <input type="text" name="cevap" value="<?php echo $bilgiler['cevap']; ?>" required><br>
                    <button type="button" class="geri-don" onclick="goToPanel()">Geri</button>
                    <button type="submit">Kaydet</button>
                </form>
                
            </div>
            
    </div>
</body>
</html>