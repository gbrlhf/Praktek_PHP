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
    <h2>Latihan IF Pilihan</h2>
    <p>Makanan apa yang anda pesan ?</p>
    <ul>
      <li>1. Sushi</li>
      <li>2. Ramen</li>
      <li>3. Hamburger</li>
      <li>4. French Fries</li>
      <li>5. Gordon Blue</li>
    </ul>

    <form method="post">
      <label>Tulis Nomor yang anda pilih</label>
      <input type="number" name="pilihan" required>
      <button type="submit">Pilih</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pilihan = $_POST['pilihan'];

        echo "<div class='hasil'>";
        if ($pilihan == 1) {
            echo "<p>Anda memilih <strong>Sushi</strong> dengan harga Rp. 30.000</p>";
        } elseif ($pilihan == 2) {
            echo "<p>Anda memilih <strong>Ramen</strong> dengan harga Rp. 50.000</p>";
        } elseif ($pilihan == 3) {
            echo "<p>Anda memilih <strong>Hamburger</strong> dengan harga Rp. 90.000</p>";
        } elseif ($pilihan == 4) {
            echo "<p>Anda memilih <strong>French Fries</strong> dengan harga Rp. 35.000</p>";
        } elseif ($pilihan == 5) {
            echo "<p>Anda memilih <strong>Gordon Blue</strong> dengan harga Rp. 70.000</p>";
        } else {
            echo "<p>Pilihan tidak valid. Silakan pilih antara 1 sampai 5.</p>";
        }
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
