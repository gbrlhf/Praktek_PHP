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
      
        $hargaNasiGoreng = 15000;
        $hargaMieAyam    = 10000;
        $hargaIndomie    = 12000;
        $hargaEsTeh      = 5000;
        $hargaKopi       = 7000;

        $NasiGoreng = $_POST['NasiGoreng'];
        $MieAyam    = $_POST['MieAyam'];
        $Indomie    = $_POST['Indomie'];
        $EsTeh      = $_POST['EsTeh'];
        $Kopi       = $_POST['Kopi'];

        $total = 0;
        echo "<div class='hasil'>";
        echo "<h3>Detail Pembayaran:</h3>";

        if ($NasiGoreng > 0) {
            $subtotal = $NasiGoreng * $hargaNasiGoreng;
            echo "<p>Nasi Goreng ($NasiGoreng x Rp " . number_format($hargaNasiGoreng,0,",",".") . ") = Rp " . number_format($subtotal,0,",",".") . "</p>";
            $total += $subtotal;
        }

        if ($MieAyam > 0) {
            $subtotal = $MieAyam * $hargaMieAyam;
            echo "<p>Mie Ayam ($MieAyam x Rp " . number_format($hargaMieAyam,0,",",".") . ") = Rp " . number_format($subtotal,0,",",".") . "</p>";
            $total += $subtotal;
        }

        if ($Indomie > 0) {
            $subtotal = $Indomie * $hargaIndomie;
            echo "<p>Indomie ($Indomie x Rp " . number_format($hargaIndomie,0,",",".") . ") = Rp " . number_format($subtotal,0,",",".") . "</p>";
            $total += $subtotal;
        }

        if ($EsTeh > 0) {
            $subtotal = $EsTeh * $hargaEsTeh;
            echo "<p>Es Teh ($EsTeh x Rp " . number_format($hargaEsTeh,0,",",".") . ") = Rp " . number_format($subtotal,0,",",".") . "</p>";
            $total += $subtotal;
        }

        if ($Kopi > 0) {
            $subtotal = $Kopi * $hargaKopi;
            echo "<p>Kopi ($Kopi x Rp " . number_format($hargaKopi,0,",",".") . ") = Rp " . number_format($subtotal,0,",",".") . "</p>";
            $total += $subtotal;
        }

        if ($total == 0) {
            echo "<p>Tidak ada pesanan.</p>";
        } else {
            echo "<h3>Total Bayar: Rp " . number_format($total,0,",",".") . "</h3>";
        }

        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
