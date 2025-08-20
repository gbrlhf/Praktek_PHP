<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Aritmatika</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Kalkulator Aritmatika</h2>
    <form method="post">
      <label>Angka 1:</label>
      <input type="number" name="angka1" required value="<?= isset($_POST['angka1']) ? $_POST['angka1'] : '' ?>">
      
      <label>Angka 2:</label>
      <input type="number" name="angka2" required value="<?= isset($_POST['angka2']) ? $_POST['angka2'] : '' ?>">

      <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        $penjumlahan = $angka1 + $angka2;
        $pengurangan = $angka1 - $angka2;
        $perkalian   = $angka1 * $angka2;
        $pembagian   = ($angka2 != 0) ? $angka1 / $angka2 : "Tidak bisa dibagi 0";

        echo "<div class='hasil'>
                <h3>Hasil Operasi:</h3>
                <p>Penjumlahan: $angka1 + $angka2 = $penjumlahan</p>
                <p>Pengurangan: $angka1 - $angka2 = $pengurangan</p>
                <p>Perkalian: $angka1 × $angka2 = $perkalian</p>
                <p>Pembagian: $angka1 ÷ $angka2 = $pembagian</p>
              </div>";
    }
    ?>
  </div>
</body>
</html>
