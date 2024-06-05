<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Angka</title>
    <link rel="stylesheet" href="project4.css">
</head>
<body>
    <div class="container">
        <div class="php">
        <?php
        if(isset($_POST['submit'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
    
            if($angka1 > $angka2) {
                echo "<h1>></h1>";
                echo "<p>$angka1 lebih besar dari $angka2</p>";
            } elseif($angka1 < $angka2) {
                echo "<h1><</h1>";
                echo "<p>$angka1 lebih kecil dari $angka2</p>";
            } else {
                echo "<h1>=</h1>";
                echo "<p>$angka1 sama dengan $angka2</p>";
            }
        }
        ?>
        </div>
        <div class="form">
        <h2>Perbandingan Angka</h2>
        <form action="" method="post">
            <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
            <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
            <button type="submit" name="submit" >Bandingkan</button>
        </form>
        </div>
    </div>
</body>
</html>
