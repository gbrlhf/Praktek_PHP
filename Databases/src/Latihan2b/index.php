<!DOCTYPE html>
<html>
<head>
    <title>Penentuan Angka Mutu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cek Angka Mutu dari Nilai</h2>
    <form method="post">
        Masukkan Nilai (0-100): 
        <input type="number" name="nilai" min="0" max="100" required> 
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $mutu = "";

        // Percabangan untuk menentukan nilai mutu
        if ($nilai >= 86 && $nilai <= 100) {
            $mutu = "A";
        } elseif ($nilai >= 75 && $nilai <= 85) {
            $mutu = "B";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $mutu = "C";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $mutu = "D";
        } elseif ($nilai < 50 && $nilai >= 0) {
            $mutu = "E";
        } else {
            $mutu = "Nilai tidak valid";
        }

        echo "<h3>Nilai Anda: $nilai</h3>";
        echo "<h3>Angka Mutu: $mutu</h3>";
    }
    ?>
</body>
</html>