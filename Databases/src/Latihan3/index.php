<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran Kalkinawa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Pembayaran Kalkinawa</h2>
    <form method="post">
      <label>Sushi</label>
      <input type="number" name="Sushi" min="0" value="<?= isset($_POST['Sushi']) ? $_POST['Sushi'] : 0 ?>">

      <label>Ramen</label>
      <input type="number" name="Ramen" min="0" value="<?= isset($_POST['Ramen']) ? $_POST['Ramen'] : 0 ?>">

      <label>Hamburger</label>
      <input type="number" name="Hamburger" min="0" value="<?= isset($_POST['Hamburger']) ? $_POST['Hamburger'] : 0 ?>">

      <label>French fries</label>
      <input type="number" name="Frenchfries" min="0" value="<?= isset($_POST['Frenchfries']) ? $_POST['Frenchfries'] : 0 ?>">

      <label>Gordon Blue</label>
      <input type="number" name="GordonBlue" min="0" value="<?= isset($_POST['GordonBlue']) ? $_POST['GordonBlue'] : 0 ?>">

      <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        // harga menu
        $harga = [
          "Sushi"          => 30000,
          "Ramen"          => 50000,
          "Hamburger"      => 90000,
          "Frenchfries"   => 35000,
          "GordonBlue"    => 70000,
        ];

        // jumlah pesanan
        $pesanan = [
          "Sushi" => $_POST['Sushi'],
          "Ramen"  => $_POST['Ramen'],
          "Hamburger"      => $_POST['Hamburger'],
          "Frenchfries"   => $_POST['Frenchfries'],
          "GordonBlue"    => $_POST['GordonBlue']
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
