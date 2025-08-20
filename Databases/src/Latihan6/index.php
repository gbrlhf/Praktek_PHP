<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menghitung Luas Bangun Datar - Haikal Alghiffari</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="container">
    <h2>Menghitung Luas Bangun Datar</h2>

    <?php
    
    if (!isset($_GET['bangun'])) {
        echo "
        <div class='menu'>
            <a href='?bangun=persegi' class='btn'>Persegi</a>
            <a href='?bangun=persegipanjang' class='btn'>Persegi Panjang</a>
            <a href='?bangun=segitiga' class='btn'>Segitiga</a>
        </div>";
    } else {
        $bangun = $_GET['bangun'];

        // FORM PERSEGI
        if ($bangun == "persegi") {
            echo "<h3>Hitung Luas Persegi</h3>
                <form method='post'>
                    <label>Sisi</label>
                    <input type='number' name='sisi' required>
                    <button type='submit' name='hitung'>Hitung</button>
                </form>";
            if (isset($_POST['hitung'])) {
                $s = $_POST['sisi'];
                $luas = $s * $s;
                echo "<div class='hasil'>
                        <h4>Hasil:</h4>
                        Rumus: sisi × sisi <br>
                        Sisi: $s <br>
                        Luas: <b>$luas</b>
                      </div>";
            }
        }

        // FORM PERSEGI PANJANG
        if ($bangun == "persegipanjang") {
            echo "<h3>Hitung Luas Persegi Panjang</h3>
                <form method='post'>
                    <label>Panjang</label>
                    <input type='number' name='panjang' required>
                    <label>Lebar</label>
                    <input type='number' name='lebar' required>
                    <button type='submit' name='hitung'>Hitung</button>
                </form>";
            if (isset($_POST['hitung'])) {
                $p = $_POST['panjang'];
                $l = $_POST['lebar'];
                $luas = $p * $l;
                echo "<div class='hasil'>
                        <h4>Hasil:</h4>
                        Rumus: panjang × lebar <br>
                        Panjang: $p <br>
                        Lebar: $l <br>
                        Luas: <b>$luas</b>
                      </div>";
            }
        }

        // FORM SEGITIGA
        if ($bangun == "segitiga") {
            echo "<h3>Hitung Luas Segitiga</h3>
                <form method='post'>
                    <label>Alas</label>
                    <input type='number' name='alas' required>
                    <label>Tinggi</label>
                    <input type='number' name='tinggi' required>
                    <button type='submit' name='hitung'>Hitung</button>
                </form>";
            if (isset($_POST['hitung'])) {
                $a = $_POST['alas'];
                $t = $_POST['tinggi'];
                $luas = 0.5 * $a * $t;
                echo "<div class='hasil'>
                        <h4>Hasil:</h4>
                        Rumus: ½ × alas × tinggi <br>
                        Alas: $a <br>
                        Tinggi: $t <br>
                        Luas: <b>$luas</b>
                      </div>";
            }
        }

        echo "<br><a href='index.php' class='btn'>Kembali</a>";
    }
    ?>
</div>
</body>
</html>
