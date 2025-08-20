<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Pembayaran Makanan</h2>
    <form method="post">
      <label>Nasi Goreng</label>
      <input type="number" name="NasiGoreng" min="0" value="<?= isset($_POST['NasiGoreng']) ? $_POST['NasiGoreng'] : 0 ?>">

      <label>Mie Ayam</label>
      <input type="number" name="MieAyam" min="0" value="<?= isset($_POST['MieAyam']) ? $_POST['MieAyam'] : 0 ?>">

      <label>Indomie</label>
      <input type="number" name="Indomie" min="0" value="<?= isset($_POST['Indomie']) ? $_POST['Indomie'] : 0 ?>">

      <label>Es Teh</label>
      <input type="number" name="EsTeh" min="0" value="<?= isset($_POST['EsTeh']) ? $_POST['EsTeh'] : 0 ?>">

      <label>Kopi</label>
      <input type="number" name="Kopi" min="0" value="<?= isset($_POST['Kopi']) ? $_POST['Kopi'] : 0 ?>">

      <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {

        $harga = [
          "NasiGoreng" => 15000,
          "MieAyam"    => 10000,
          "Indomie"    => 12000,
          "EsTeh"      => 5000,
          "Kopi"       => 7000,
        ];

        // jumlah pesanan
        $pesanan = [
          "NasiGoreng" => $_POST['NasiGoreng'],
          "MieAyam"    => $_POST['MieAyam'],
          "Indomie"    => $_POST['Indomie'],
          "EsTeh"      => $_POST['EsTeh'],
          "Kopi"       => $_POST['Kopi']
        ];

        $total = 0;
        echo "<div class='hasil'>";
        echo "<h3>Detail Pembayaran:</h3>";

        foreach ($pesanan as $menu => $jumlah) {
            if ($jumlah > 0) {
                $subtotal = $jumlah * $harga[$menu];
                echo "<p>$menu ($jumlah x Rp " . number_format($harga[$menu],0,",",".") . ") = Rp " . number_format($subtotal,0,",",".") . "</p>";
                $total += $subtotal;
            }
        }

        echo "<h3>Total Bayar: Rp " . number_format($total,0,",",".") . "</h3>";
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
